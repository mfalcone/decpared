<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

     function __construct() {
     
	     parent::__construct();
	     $this->load->model('propiedad_m', 'Propiedad_m');

	 }
	public function index()
	{
	  if( !$this->session->userdata('user_logged') )
		{
                    $data['content']="usuarios/login";
		    $this->load->view('usuarios/template', $data);
			
		}
		else
		{
		    $data['categorias_menu'] = $this->categorias_menu();
		    $data['destacados']=$this->Propiedad_m->destacados(13);
		    $data['adela_c'] = $this->_adela_c('carrusel_1');
		    $data['content']="home";
		    $this->load->view('includes/template', $data);
		}
	}
	public function modal()
	{

	  $this->load->view('includes/modal_home');
	}
	 private function _adela_c($campo)
    {
	
	$this->db->order_by('web_id','asc');
	$carrusel = $this->db->get('carrusel')->result_array();
	$i = 0;
	foreach($carrusel as $slide)
	{
	    $this->db->join('carrusel_traduccion', 'carrusel_traduccion.carrusel_id = archivo.propietario_id');
	    $this->db->where(array('propietario_id' => $slide['id'],
				   'campo' => $campo,
				   'modulo_id'=>'1'));
	    $sql = $this->db->get('archivo');
	    if ($sql->num_rows() > 0)
	    {
		$sql2[] = $sql->row_array();
		$i++;
	    }
	}
	$sql2['cantidad'] = $i;
	return $sql2;
    }
    function categorias_menu()
	{
		$data['tema']=$this->Propiedad_m->get_nombre_by_tipo('tema');
		$data['color']=$this->Propiedad_m->get_nombre_by_tipo('color');
		$data['ambiente']=$this->Propiedad_m->get_nombre_by_tipo('ambiente');
		return $data;
	}

}
