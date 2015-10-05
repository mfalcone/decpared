<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyectos extends CI_Controller {
        function __construct() {
     
        parent::__construct();
        $this->load->model('propiedad_m', 'Propiedad_m');
	$CI = &get_instance();
	$CI->config->load("mercadopago", TRUE);
	$config = $CI->config->item('mercadopago');
	$this->load->library('Mercadopago', $config);  
	}
	public function index()
	{
		$data['categorias_menu'] = $this->categorias_menu();
		$data['content']="index_busqueda";
		$this->load->view('includes/template', $data);
	}
	
	public function mural()
	{
		$tipo = $this->uri->segment(3);
		$tipo_id = $this->uri->segment(4);
		$limit = 9;
		$pagina = 0;

		$pagina = $this->uri->segment(6);
		
		$this->load->library('pagination');
	
		$config['base_url'] = base_url() . 'index.php/proyectos/mural/'.$tipo.'/'.$tipo_id.'/pagina/';
		$config['uri_segment'] = 6;
		$config['total_rows'] = $this->Propiedad_m->count_all($tipo,$tipo_id);
		$config['per_page'] = $limit;
	        $config['full_tag_open'] = '<ul class="pagination">';
                $config['full_tag_close'] = '</ul><!--pagination-->';
		$config['first_link'] = '&laquo; Primero';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Ultimo &raquo;';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Siguiente &rarr;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Anterior';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>'; 

		$this->pagination->initialize($config);
		
		$data['pagination']=$this->pagination->create_links();
		$data['nombre']=$this->Propiedad_m->get_bread_by_tipo($tipo,$tipo_id);
		$data['categorias']=$this->Propiedad_m->get_nombre_by_tipo($tipo);
		$data['propiedades']=$this->Propiedad_m->get_all($tipo,$tipo_id,$limit,$pagina);
		$data['categorias_menu'] = $this->categorias_menu();
		$data['tipo']=$tipo;
		$data['content']="proyectos";
		$this->load->view('includes/template', $data);
	}
	public function cortinas()
	{
		$data['categorias']=$this->Propiedad_m->get_all_by_categoria(4);
		$data['propiedades']=$this->Propiedad_m->get_all();
		$data['categorias_menu'] = $this->categorias_menu();
		$data['content']="proyectos";
		$this->load->view('includes/template', $data);
	}
	function id()
	{
		$propiedad_id = $this->uri->segment(3);
		$data['propiedad']= $this->Propiedad_m->get_by_id($propiedad_id,"campo_2");
		$data['galeria'] = $this->Propiedad_m->galeria_by_propiedad($propiedad_id);
		$data['categorias_menu'] = $this->categorias_menu();
	   $data['content']="proyecto";
	   $this->load->view('includes/template', $data);
	}
	
	function post_proyecto()
	{
		$height = $this->input->post('height');
		$width = $this->input->post('width');
		$materialId = $this->input->post('materialId');
		echo $this->Propiedad_m->get_precio_json($height,$width,$materialId);

	}
		function agregar_carrito()
	{
		$height = $this->input->post('height');
		$width = $this->input->post('width');
		$materialId = $this->input->post('materialId');
		$precio = $this->Propiedad_m->get_precio($height,$width,$materialId);
		$titulo=$this->Propiedad_m->get_nombre_by_id($this->input->post('printId'));
		$img =$this->Propiedad_m->get_by_id($this->input->post('printId'),"campo_2");
		$options=array(
				'alto'=>$this->input->post('height'),
				'material_id'=>$this->input->post('materialId'),
				'espejado'=>$this->input->post('mirrored'),
				'producto_id'=>$this->input->post('printId'),
				'ancho'=>$this->input->post('width'),
				'x'=>$this->input->post('x'),
				'y'=>$this->input->post('y'),
				'img'=>$img['archivo']['mini'],
				'codigo'=>$this->Propiedad_m->get_codigo_by_id($this->input->post('printId'))
				);
		
                
		
		if(is_numeric($this->input->post('printId')))
		{
			
			$dato = array(
				'id'      =>$this->input->post('printId'),
				'qty'     => 1,
				'price'   => $precio,
				'name'    => $titulo,
				'options' => $options
				);
			$this->cart->insert($dato);
		}

	   $data['total']=$this->cart->total();
	    $data['total_items']=$this->cart->total_items();
	    $items = $this->cart->contents();
	    die($items);
	  // $this->load->view('respuesta_carrito', $data);
	}
	function carrito()
	{

          //$accessToken = $this->mercadopago->get_access_token();

            foreach ($this->cart->contents() as $items)
	  {

		$recorte = $this->recorte($items['rowid'],$items['id'], $items['options']['x'],$items['options']['y'],$items['options']['ancho'],$items['options']['alto']);
	  }
	    $data['content']="carrito";
	    $data['categorias_menu'] = $this->categorias_menu();
	   $this->load->view('includes/template', $data);
	}
	
	function actualizar()
	{

		$this->cart->update($_POST);
		redirect('proyectos/carrito');
	}
	function categorias_menu()
	{
		$data['tema']=$this->Propiedad_m->get_nombre_by_tipo('tema');
		$data['color']=$this->Propiedad_m->get_nombre_by_tipo('color');
		$data['ambiente']=$this->Propiedad_m->get_nombre_by_tipo('ambiente');
		return $data;
	}
	    function recorte($rowid, $producto_id, $x, $y, $ancho, $alto)
        {
		if (!file_exists('./imagenes/pedidos/'.$rowid.'jpeg')) {
			$archivo=$this->Propiedad_m->get_foto_by_propiedad_id($producto_id, "campo_2");
			$src= $this->config->item('base_url_2').'imagenes/productos/'.$archivo['mini'];
			$tamano = getimagesize($src);
			$ancho_px = $tamano[0];
			$alto_px = $tamano[1];
			
			//caso 1
			$nuevo_alto_px = ($alto*$ancho_px)/$ancho;
			if($nuevo_alto_px > $alto_px)
			{$nuevo_alto_px = $alto_px;}
			
			
			//caso
			$nuevo_ancho_px = ($ancho*$alto_px)/$alto;
			if($nuevo_ancho_px>$ancho_px)
			{$nuevo_ancho_px=$ancho_px;}
			
			
	   
			if($x !=0)
			{
				     $ancho_px = $ancho_px*$x;
			}
			else
			{
			   $ancho_px = 0;
			}
			if($y !=0)
			{
				     $alto_px = $alto_px*$y;
			}
			else
			{
			   $alto_px = 0;
			}
			$return=array('y'=>$alto_px,'x'=>$ancho_px,'width'=>$nuevo_ancho_px,'height'=>$nuevo_alto_px,);
			
			   $im = imagecreatefromjpeg($src);
			   $thumb_im = imagecrop($im, $return);
			   if (!file_exists('./imagenes/pedidos/')) {
			       mkdir('./imagenes/pedidos/', 0777, true);
			   }
			   imagejpeg($thumb_im, './imagenes/pedidos/'.$rowid.'.jpeg', 60);
	}
	
    }

}
