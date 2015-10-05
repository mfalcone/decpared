<?php


class Propiedad_m extends CI_Model {

    public function __construct() {

        parent::__construct();

    }
    function destacados($limit = 3)
    {
	/* consulta tabla propiedades */
	$sql = $this->db
	    ->where(array('productos.destacado'=>1, 'productos.publica'=>1))
	    ->limit($limit)
	    ->select('productos.id, categoria.title, productos.precio_basico, productos.galeria_id')
	    ->join('categoria','categoria.id = productos.categoria_id')
	    ->order_by('id DESC')
	    ->get('productos');

	if($sql->num_rows()>0)
	{
	    $propiedades = $sql->result_array();
	    foreach($propiedades as $propiedad)
	    {
	    
	     $return[] = $this->get_by_id($propiedad['id'],"campo_1");
	    }
	    
	}
	if(isset($return)){
	return $return;}
	else
	{return false;}
    }
    function get_all_by_categoria($parent_id)
    {
	/* consulta tabla categoria */
        $sql = $this->db
		->where(array('parent_id'=>$parent_id))
		->get('categoria')
		->result_array();

	return $sql;
    }
    function get_all_by_tipo($tipo)
    {
	/* consulta tabla categoria */
	
        $sql = $this->db
	        ->select($tipo.'_id')
	        ->distinct()
		->get('relacion_producto_'.$tipo)
		->result_array();

	return $sql;
    }
        function get_one_by_tipo($tipo,$tipo_id)
    {
	/* consulta tabla categoria */
	
        $sql = $this->db
	        ->select($tipo.'_id')
		->where(array($tipo.'_id'=>$tipo_id))
		->limit(1)
	        ->distinct()
		->get('relacion_producto_'.$tipo)
		->row_array();

	return $sql;
    }
    
        function get_bread_by_tipo($tipo,$tipo_id)
    {
	/* consulta tabla categoria */
	
        $sql = $this->db
	        ->select('nombre')
		->where(array('id'=>$tipo_id))
		->limit(1)
	        ->distinct()
		->get($tipo)
		->row_array();

	return $sql['nombre'];
    }
      function count_all($tipo,$tipo_id)
    {
	/* consulta tabla categoria */
	
        $sql = $this->db
	        ->select($tipo.'_id')
		->where(array($tipo.'_id'=>$tipo_id))
		->get('relacion_producto_'.$tipo)
		->num_rows();

	return $sql;
    }
    function get_nombre_by_tipo($tipo)
    {
	/* consulta tabla categoria */
	$tipos =$this->get_all_by_tipo($tipo);
	
        foreach ($tipos as $tip)
	{
	    $sql[]=$this->db
	    ->limit(1)
	    ->where(array('id'=>$tip[$tipo.'_id']))
	    ->get($tipo)
	    ->row_array();
	}

	return $sql;
    }

    public function get_all($tipo,$tipo_id,$limit,$pagina) {

	$tip=$this->get_one_by_tipo($tipo,$tipo_id);
	$sql = $this->db
		    ->limit($limit)
		    ->offset($pagina)
		    ->where(array($tipo.'_id'=>$tip[$tipo.'_id']))
		    ->get('relacion_producto_'.$tipo);
	if($sql->num_rows > 0)
	{
	    foreach($sql->result_array() as $tip2)
	    {
		$producto['prod'] = $this->get_by_id($tip2['producto_id'],"campo_1");
		$producto['tipo_id']=$tip[$tipo.'_id'];
		$return[] = $producto;
	       
	    }
	    
	}


	if(isset($return)){
	return $return;}
	else
	{return false;}
    }

    function get_categorias($parent_id)
    {
	/* consulta tabla categoria */
         $sql = $this->db

		->where(array('parent_id'=>$parent_id))
		->get('categoria')
		->result_array();
		return $sql;
    }
    public function get_by_id($propiedad_id = false,$campo) {

       
        /* consulta tabla tabla */
        $sql = $this->db
		->limit(1)
		->where(array('id'=>$propiedad_id))
		->get('productos')
		->row_array();
        
	/* consulta tabla archivo */
	$sql['archivo'] = $this->get_foto_by_propiedad_id($propiedad_id,$campo);
//        $this->db->where(array('propietario_id' => $propiedad_id,
//				   'tipo_id' => '0', 
//				   'modulo_id' => '28',
//				   'campo' => $campo,
//				   
//				   ))
//	          ->limit(1)->select('archivo');
//	$sql2 = $this->db->get('archivo');
//	if($sql2->num_rows() > 0)
//	{
//	    $foo = $sql2->row_array();
//	    $sql['archivo']['mini'] = $this->_add_file_marker($foo['archivo'], "_thumb");
//	     $sql['archivo']['ampli'] = $foo['archivo'];
//	}
//	else
//	{
//	    $sql['archivo']['ampli'] = $campo.".jpg";
//	    $sql['archivo']['mini'] = $campo."_thumb.jpg";
//	}	

        return $sql;
    
    }
  
    function galeria_by_propiedad($propiedad_id)
    {
	$propiedad = $this->db
	    ->where(array('id'=>$propiedad_id))
	    ->limit(1)
	    ->get('productos')->row_array();
	    /* consulta tabla galerias */
        $sql = $this->db
		->limit(1)
		->where(array('id'=>$propiedad['galeria_id']))
		->get('galerias');
	if($sql->num_rows() > 0)
	{
	    $foo = $sql->row_array();
	    /* consulta tabla fotos */
            $fotos = $this->db
		->where(array('galeria_id'=>$foo['id']))
		->get('fotos')
		->result_array();
		
	    return $fotos;
	}
	else
	{
	 return false   ;
	}
    }
    
    private function _add_file_marker($filename, $marker) {
        if ($filename == '')
            return;
        $filename = explode('.', $filename);
        //print_r($filename);
        return $filename[0] . $marker . '.' . $filename[1];
    }
    function get_precio_json($height,$width,$materialId)
	{
	    //traigo los datos del material
	    $this->db->where(array('id'=>$materialId));
	    $this->db->limit(1);
	    $sql = $this->db->get('material');
	    
	    if($sql->num_rows() >0)
	    {
		$res = $sql->row_array();
		$superficie = ($height / 100)*($width /100);
		$precio= '$'.($superficie*$res['precio']);
		
		
	    }

		$jsonso = array(
			'path'=>"pattern-jay-1",
			'productId'=>"46906",
			'printId'=>"60638",
			'type'=>"scaling",
			'typeId'=>"1",
			'group'=>"photo-wallpaper",
			'groupId'=>"1",
			'collection'=>"designers",
			'collectionId'=>"2",
			'material'=>"standard-wallpaper",
			'materialId'=>"1",
			'visible'=>"true",
			'browsable'=>"true",
			'designer'=>"Scandinavian Surface",
			'designerId'=>"8",
			'designerStatus' =>"1",
			'designerPath'=>"scandinavian-surface",
			'designerCategoryId'=>"450",
			'pricepremium'=>"40.845",
			'nameLocalized'=>null,
			'artNo'=>"e21772",
			'name'=>"Pattern Jay",
			'height'=>"300",
			'orgArtNo'=>null,
			'width'=>"1000",
			'widths'=>3,
			'min-height'=>null,
			'min-width'=>null,
			'max-height'=>null,
			'max-width'=>null,
			'photowall_resolution'=>"150",
			'canvas_resolution'=>"150",
			'wallpaper_resolution'=>"150",
			'lock_height'=>null,
			'additionalprice'=>null,
			'ref1'=>null,
			'ref2'=>null,
			'ref3'=>null,
			'copyright'=>null,
			'proportions_warning'=>null,
			'margin_width_max'=>null,
			'margin_width_min'=>null,
			'margin_height_max'=>null,
			'margin_height_min'=>null,
			'imageWidth'=>1000,
			'imageHeight'=>300,
			'imageRatio'=>3.3333333333333,
			'rawPrice'=>40.189782722,
			'price'=>$superficie,
			'priceMin'=>$res['precio_min'],
			'rand1'	=>1,
			'rand2'=>15,
			'priceCustom'=>$superficie,
			'customWidth'=>100,
			'customWidths'=>1,
			'customHeight'=>100,
			'mirroring'=>0,
			'keepAspect'=>"false",
			'widthsWidth'=>45,
			'inStock'=>"true",
			);
		return json_encode($jsonso);
	}
	    function get_precio($height,$width,$materialId)
	{
	    //traigo los datos del material
	    $this->db->where(array('id'=>$materialId));
	    $this->db->limit(1);
	    $sql = $this->db->get('material');
	    
	    if($sql->num_rows() >0)
	    {
		$res = $sql->row_array();
		$superficie = ($height / 100)*($width /100);
		$precio= '$'.($superficie*$res['precio']);
		
		return $superficie;
	    }
	    else
	    {
		return false;
	    }

	    
	}
	    function get_precio_2($height,$width,$materialId)
	{
	    //traigo los datos del material
	    $this->db->where(array('id'=>$materialId));
	    $this->db->limit(1);
	    $sql = $this->db->get('material');
	    
	    if($sql->num_rows() >0)
	    {
		$res = $sql->row_array();
		$superficie = ($height / 100)*($width /100);
		$precio= ($superficie*$res['precio']);
		
		return $precio;
	    }
	    else
	    {
		return false;
	    }

	    
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
	function crear_pedido($contacto, $items)
	{
	    $pedido=array(
			  'fecha'=>date('Y-m-d'),
			  'hora'=>date('h:i:s'),
			  'contacto_id'=>$contacto['id']
			  );
	    $this->db->insert('pedido',$pedido);
	    $pedido_id=$this->db->insert_id();
	    foreach($items as $item)
		{
	    
	   
	    $pedido_detalle = array(
				    'rowid'=>$item['rowid'],
				    'pedido_id'=>$pedido_id,
				    'producto_id'=>$item['id'],
				    'name'=>$item['name'],
				    'cantidad'=>$item['qty'],
				    'alto'=>$item['options']['alto'],
				    'ancho'=>$item['options']['ancho'],
				    'material_id'=>$item['options']['material_id'],
				    'x'=>$item['options']['x'],
				    'y'=>$item['options']['y'],
	                            'precio'=>$this->get_precio_2($item['options']['alto'],$item['options']['ancho'],$item['options']['material_id'])
								  );
	    $this->db->insert('pedido_detalle',$pedido_detalle);

		}
		return $pedido_id;
	}
	function material_by_id($material_id)
	{
	    $sql=$this->db->limit(1)->where(array('id'=>$material_id))->get('material')->row_array();
	    return $sql['nombre'];
	}
	function precio_by_material_id($material_id)
	{
	    $sql=$this->db->limit(1)->where(array('id'=>$material_id))->get('material')->row_array();
	    return $sql['precio'];
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

}