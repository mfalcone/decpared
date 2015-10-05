<?php

class Usuario_m extends CI_Model {

    public function __construct() {

        parent::__construct();


    }

   public function get_organizadores()
   {
    return $this->db->get('organizador')->result_array();
   }
   public function get_organizador_by_id($organizador_id)
   {
    return $this->db->limit(1)->where(array('id'=>$organizador_id))->get('organizador')->row_array();
   }
   function get_pedidos_by_contacto_id($contacto_id)
   {
    
    $sql = $this->db->where(array('contacto_id'=>$contacto_id))->get('pedido');

    if($sql->num_rows >0)
    {
	$pedidos = $sql->result_array();
	foreach($pedidos as $pedido)
	{

	    $return_2[]=$this->get_pedidos_by_id($pedido['id']);
	    
	}
	return $return_2;
    }
	else
	{return false;}
    
   }
   //function get_pedidos_by_id($pedido_id)
   //{
   // return $this->db->where(array('pedido_id'=>$pedido_id))
   // ->get('pedido_detalle')->result_array();
   //}
    public function get_pedidos_by_id($pedido_id)
    {
        $this->db->limit(1);
	$this->db->where(array('id'=>$pedido_id));
        $pedido['general'] = $this->db->get('pedido')->row_array();
	
	$this->db->where(array('pedido_id'=>$pedido_id));
        $pedido['detalle'] = $this->get_pedido_detalle_by_id($pedido_id);
	$pedido['superficie']  = $this->get_superficie_by_pedido_id($pedido_id);
	$pedido['suma']  = $this->get_cantidad_by_pedido_id($pedido_id);
        $pedido['total']  = $this->precio_by_pedido($pedido_id);
	$pedido['items'] =$this->get_cantidad_items($pedido_id);
	
//	$this->db->where(array('id'=>$pedido['general']['contacto_id']))->limit(1);
//        $pedido['contacto'] = $this->db->get('contacto')->row_array();
//	
//	$this->db->where(array('id'=>$pedido['contacto']['organizador_id']))->limit(1);
//        $pedido['organizador'] = $this->db->get('organizador')->row_array();
	
	
	return $pedido;
    }
    
    function get_pedido_detalle_by_id($pedido_id)
    {
	$sql = $this->db->get('pedido_detalle')->result_array();
	
	foreach($sql as $detalle)
	{
	    $ver['codigo'] = $this->get_codigo_by_id($detalle['producto_id']);
	    $ver['nombre'] = $this->get_nombre_by_id($detalle['producto_id']);
	    $ver['material'] = $this->material_by_id($detalle['material_id']);
	    $ver['ancho'] = $detalle['ancho'];
	    $ver['alto'] = $detalle['alto'];
	    $ver['precio'] = $detalle['precio'];
	    $ver['cantidad'] = $detalle['cantidad'];
	    $ver['superficie'] = ($detalle['alto'] / 100)*($detalle['ancho'] /100);;
	    $ver['imagen']=$this->get_foto_by_propiedad_id($detalle['producto_id'],"campo_1");
	    $return[] = $ver;

	}
	return $return;
	
    }
    function get_foto_by_propiedad_id($propiedad_id, $campo)
	{
	    /* consulta tabla archivo */
	    $this->db->where(array('propietario_id' => $propiedad_id,
				       'tipo_id' => '0', 
				       'modulo_id' => '28',
				       'campo' => $campo,
				       
				       ))
		      ->limit(1)->select('archivo');
	    $sql2 = $this->db->get('archivo');
	    if($sql2->num_rows() > 0)
	    {
		$foo = $sql2->row_array();
		$sql['mini'] = $this->_add_file_marker($foo['archivo'], "_thumb");
		 $sql['ampli'] = $foo['archivo'];
	    }
	    else
	    {
		$sql['ampli'] = $campo.".jpg";
		$sql['mini'] = $campo."_thumb.jpg";
	    }	
    
	    return $sql;
	}
    function material_by_id($material_id)
	{
	    $sql=$this->db->limit(1)->where(array('id'=>$material_id))->get('material')->row_array();
	    return $sql['nombre'];
	}
    function get_nombre_by_id($productos_id)
	{
	    $sql=$this->db->limit(1)
			->where(array('id'=>$productos_id))
			->select('titulo')->get('productos')
			->row_array();
			
	    return $sql['titulo'];
	}
    function get_codigo_by_id($productos_id)
	{
	    $sql=$this->db->limit(1)
			->where(array('id'=>$productos_id))
			->select('codigo')->get('productos')
			->row_array();
			
	    return $sql['codigo'];
	}
    function get_cantidad_items($pedido_id)
    {
	return $this->db->select('id')->where(array('pedido_id'=>$pedido_id))->get('pedido_detalle')->num_rows();
    }
    function get_superficie_by_pedido_id($pedido_id)
    {
	$cantidad = $this->get_cantidad_by_pedido_id($pedido_id);
	
	 $this->db->select_sum('ancho')->where(array('pedido_id'=>$pedido_id));
         $query= $this->db->get('pedido_detalle');
	 $ancho = $query->row()->ancho;
	 
	 $this->db->select_sum('alto')->where(array('pedido_id'=>$pedido_id));
         $query= $this->db->get('pedido_detalle');
	 $alto = $query->row()->alto;
	 

	return $cantidad*(($ancho*$alto)/10000);
    }
    function get_cantidad_by_pedido_id($pedido_id)
    {

	
        $this->db->select_sum('cantidad')->where(array('pedido_id'=>$pedido_id));
	$query = $this->db->get('pedido_detalle');
	return $query->row()->cantidad;
    }
    function precio_by_pedido($pedido_id)
    {
	$this->db->where(array('pedido_id'=>$pedido_id));
        $pedidos = $this->db->get('pedido_detalle')->result_array();
	$total = 0;
	foreach($pedidos as $pedido)
	{
	    $subtotal = array();
	    $subtotal = $pedido['precio']*$pedido['cantidad'];
	    $total = $subtotal + $total;
	}
	
	return $total;
    }
   function get_contacto_by_id($contacto_id)
   {
    return $this->db->limit(1)->where(array('id'=>$contacto_id))->get('contacto')->row_array();
   }
    private function _add_file_marker($filename, $marker) {
        if ($filename == '')
            return;
        $filename = explode('.', $filename);
        //print_r($filename);
        return $filename[0] . $marker . '.' . $filename[1];
    }

}
