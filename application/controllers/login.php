<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
	$this->load->model('usuario_m', 'Usuario_m');
    }
    function index() {
	$this->load->library('form_validation');
		
	$config = array(
	    array( 'field'   => 'usuario', 'label' => 'Usuario','rules'   => 'required' ),
	    array( 'field'   => 'clave', 'label' => 'Clave','rules'   => 'required' ));

	$this->form_validation->set_rules($config); 				
	
	$this->form_validation->set_message('required', 'El campo %s es obligatorio');
	$this->form_validation->set_message('valid_email', 'El email ingresado no es valido');
        $mensaje = '';
	if ($this->form_validation->run())
	{
	    if ( $this->input->post('usuario') &&  $this->input->post('clave') )
	    {
		$this->db->where( array('usuario' => $this->input->post('usuario'), 
				'clave' => md5( $this->input->post('clave')),
				'activado' => '1')
			 );
		$query = $this->db->get('contacto');		
	
		if ($query->num_rows() == 1)
		{
		$usuario = $query->row_array();
		$organizador = $this->Usuario_m->get_organizador_by_id($usuario['organizador_id']);
		$usuario_array =  array( 
			'nombre' => $usuario['nombre'],
			'apellido' => $usuario['apellido'],
			'email' => $usuario['email'],
			'id' => $usuario['id'],
			'iva' => $usuario['iva'],
			'usuario' => $usuario['usuario'],
			'razon_social' => $usuario['razon_social'],
			'logo' => $usuario['logo'],
			'mail_organizador' => $organizador['email'],
			'organizador_id'=>$usuario['organizador_id']
		);
		$this->session->set_userdata('usuario', $usuario_array);
		$this->session->set_userdata('user_logged', TRUE);
		$mensaje = '';
		redirect('home');
		}
		else
		{
		    $mensaje = 'Los datos ingresados no son válidos o el usuario no tiene acceso permitido';
		}
            }
	}
	$data['mensaje']=$mensaje;
	$data['content']="usuarios/login";
	$this->load->view('usuarios/template', $data);
    }
	
    public function logout() {
	    $this->session->unset_userdata('user_logged');
	    $this->session->unset_userdata('usuario');
    redirect( 'login' );
    }
    public function registro()
    {
	$data['actividades'] = $this->db->get('actividades')->result_array();
	$data['content']="usuarios/registro";
	$this->load->view('usuarios/template', $data);
	
    }
    function perfil()
    {
	$data['usuario'] = $this->session->userdata('usuario');
	$data['actividades'] = $this->db->get('actividades')->result_array();
	$data['content']="usuarios/perfil";
	$this->load->view('usuarios/template', $data);
    }
    public function agregar() {
	        $this->load->library('form_validation');
		
		$config = array(
			array( 'field'   => 'usuario', 'label' => 'Usuario','rules'   => 'required|is_unique[contacto.usuario]' ),
			array( 'field'   => 'clave', 'label' => 'Clave','rules'   => 'required' ),
			array( 'field'   => 'clave_repetir', 'label' => 'Repetir clave','rules'   => 'required|matches[clave]' ),
			array( 'field'   => 'nombre', 'label' => 'Nombre','rules'   => 'required' ),
			array( 'field'   => 'razon_social',	'label' => 'Razón Social',	'rules'   => 'required' ),
			array( 'field'   => 'calle',		'label' => 'Domicilio',		'rules'   => 'required' ),
			array( 'field'   => 'ciudad',		'label'	=> 'Localidad',	'rules'   => 'required' ),
			array( 'field'   => 'codPostal',		'label' => 'Código Postal','rules'   => 'required' ),
			array( 'field'   => 'provincia',		'label' => 'Provincia',	'rules'   => 'required' ),
			array( 'field'   => 'telefono',		'label' => 'Teléfono',	'rules'   => 'required' ),
			array( 'field'   => 'email',			'label' => 'Email','rules'   => 'required|valid_email|is_unique[contacto.email]' ),
			array( 'field'   => 'email_contacto',			'label' => 'Email COntacto','rules'   => 'required|valid_email|is_unique[contacto.email]' ),
			array( 'field'   => 'cuit',			'label' => 'CUIT','rules'   => 'required|is_unique[contacto.cuit]' ),
			array( 'field'   => 'domicilio_fiscal',		'label' => 'Domicilio Fiscal',	'rules'   => 'required' ),

            );

		$this->form_validation->set_rules($config); 				
		
		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('valid_email', 'El email ingresado no es valido');

		if ($this->form_validation->run())
		{
		    if ($_FILES[ 'logo']['size'] != 0)
		    {
			$logo=$this->do_upload($_FILES[ 'logo']['name']);
			
		    }
		    else{$logo="";}
		    
		$empresa_array = array(
		    'usuario' => $this->input->post('usuario'),		
		    'clave' => md5( $this->input->post('clave')), 					
		    'nombre' => $this->input->post('nombre'),
		    'apellido' => $this->input->post('apellido'),
		    'razon_social' => $this->input->post('razon_social'),
		    'cuit' => $this->input->post('cuit'),
		    'calle' => $this->input->post('calle'),
		    'ciudad' => $this->input->post('ciudad'),
		    'codPostal' => $this->input->post('codPostal'),
		    'provincia' => $this->input->post('provincia'),
		    'pais' => $this->input->post('pais'),
		    'telefono' => $this->input->post('telefono'),
		    'celular' => $this->input->post('celular'),
		    'email' => $this->input->post('email'),
		    'email_contacto' => $this->input->post('email_contacto'),
		    'web' => $this->input->post('web'),
		    'domicilio_fiscal' => $this->input->post('domicilio_fiscal'),
		    'actividadAfip' => $this->input->post('actividadAfip'),
		    'tipoIva' => $this->input->post('tipoIva'),
		    'actividad_id' => $this->input->post('actividad_id'),
		    'fecha' => date('Y-m-d'),
		    'logo'=>$logo,
		    'organizador_id' => $this->input->post('organizador_id'),
		);
		//'logo'=>$logo,echo "<pre>";
		//print_r($_FILES);
		//echo "</pre>";
		$this->db->insert('contacto', $empresa_array);
		$mail = $this->_enviar_autorizacion($empresa_array);
//               echo "<pre>";
//		print_r($mail);
//		echo "</pre>";
		redirect('/');
		}
		$data['organizadores']=$this->Usuario_m->get_organizadores();
		$data['content']="usuarios/registro";
		$this->load->view('usuarios/template', $data);
	
	}
	public function seguridad()
	{
	    $usuario = $this->session->userdata('usuario');
	    $this->load->library('form_validation');
		
		$config = array(

			array( 'field'   => 'clave', 'label' => 'Clave','rules'   => 'required' ),
			array( 'field'   => 'clave_repetir', 'label' => 'Repetir clave','rules'   => 'required|matches[clave]' )
			);

		$this->form_validation->set_rules($config); 				
				$this->form_validation->set_message('required', 'El campo %s es obligatorio');


		if ($this->form_validation->run())
		{
		    $pass= array('clave' => md5( $this->input->post('clave')));
		    $this->db->limit(1)->where(array('id'=>$usuario['id']))->update('contacto',$pass);
		    
		    $mensaje = "Estimado ".$usuario['nombre']."
		: su contraseña fue cambiada<br /> los nuevos datos de acceso son:<br />
		<strong>Usuario: </strong>".$usuario['usuario']."<br />
		<strong>Contraseña: </strong>".$this->input->post('clave')."<br />
		
		Muchas Gracias.";
		
                $this->load->library('email');
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$this->email->initialize($config);


		$to = $usuario['email'];

		$this->email->from('info@decoratupared.com.ar', 'Decoratupared');
		$this->email->to($to);				
                $this->email->subject('Cambio de contraseña decoratupared.com.ar');
		$this->email->message($mensaje);
		
		if ( ! $this->email->send())
		{
		    
		}
		$this->email->clear();
		    redirect('login/logout');
		}
		
	    $data['content']="usuarios/seguridad";
	    $this->load->view('usuarios/template', $data);
	}

	    public function editar() {
		$usuario = $this->session->userdata('usuario');
		$data['usuario']=$this->Usuario_m->get_contacto_by_id($usuario['id']);
	        $this->load->library('form_validation');
		
		$config = array(

			array( 'field'   => 'nombre', 'label' => 'Nombre','rules'   => 'required' ),
			array( 'field'   => 'razon_social',	'label' => 'Razón Social',	'rules'   => 'required' ),
			array( 'field'   => 'calle',		'label' => 'Domicilio',		'rules'   => 'required' ),
			array( 'field'   => 'ciudad',		'label'	=> 'Localidad',	'rules'   => 'required' ),
			array( 'field'   => 'codPostal',		'label' => 'Código Postal','rules'   => 'required' ),
			array( 'field'   => 'provincia',		'label' => 'Provincia',	'rules'   => 'required' ),
			array( 'field'   => 'telefono',		'label' => 'Teléfono',	'rules'   => 'required' ),
			array( 'field'   => 'email',			'label' => 'Email','rules'   => 'required|valid_email' ),
			array( 'field'   => 'email_contacto',			'label' => 'Email COntacto','rules'   => 'required|valid_email' ),
			array( 'field'   => 'cuit',			'label' => 'CUIT','rules'   => 'required' ),
			array( 'field'   => 'domicilio_fiscal',		'label' => 'Domicilio Fiscal',	'rules'   => 'required' ),

            );

		$this->form_validation->set_rules($config); 				
		
		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('valid_email', 'El email ingresado no es valido');

		if ($this->form_validation->run())
		{
		    
		    if ($_FILES[ 'logo']['size'] != 0)
		    {
			$logo=$this->do_upload($_FILES['logo']['name']);
			$path_to_file = FCPATH.'imagenes/logo_cliente/'.$data['usuario']['logo'];
			if(unlink($path_to_file)) {
			     echo 'deleted successfully';
			}
			else {
			     echo 'errors occured';
			}
			
		    }
		    else
		    {$logo=$data['usuario']['logo'];}
		    
		$empresa_array = array(
		    'nombre' => $this->input->post('nombre'),
		    'apellido' => $this->input->post('apellido'),
		    'razon_social' => $this->input->post('razon_social'),
		    'cuit' => $this->input->post('cuit'),
		    'calle' => $this->input->post('calle'),
		    'ciudad' => $this->input->post('ciudad'),
		    'codPostal' => $this->input->post('codPostal'),
		    'provincia' => $this->input->post('provincia'),
		    'pais' => $this->input->post('pais'),
		    'telefono' => $this->input->post('telefono'),
		    'celular' => $this->input->post('celular'),
		    'email' => $this->input->post('email'),
		    'email_contacto' => $this->input->post('email_contacto'),
		    'web' => $this->input->post('web'),
		    'domicilio_fiscal' => $this->input->post('domicilio_fiscal'),
		    'actividadAfip' => $this->input->post('actividadAfip'),
		    'tipoIva' => $this->input->post('tipoIva'),
		    'actividad_id' => $this->input->post('actividad_id'),
		    'logo'=>$logo
		);
                $this->db->limit(1)
		->where(array('id'=>$usuario['id']))
		->update('contacto', $empresa_array);
                 
		//edito dato session
		//$usuario_array =  array( 
		//	'nombre' => $usuario['nombre'],
		//	'apellido' => $usuario['apellido'],
		//	'email' => $usuario['email'],
		//	'id' => $usuario['id'],
		//	'iva' => $usuario['iva'],
		//	'usuario' => $usuario['usuario'],
		//	'razon_social' => $usuario['razon_social'],
		//	'logo' => $usuario['logo'],
		//	'mail_organizador' => $organizador['email'],
		//	'organizador_id'=>$usuario['organizador_id']
		//);
		//$this->session->set_userdata('usuario', $usuario_array);
		//$this->session->set_userdata('user_logged', TRUE);

		redirect('login/perfil');
		}
		
		
		$data['organizadores']=$this->Usuario_m->get_organizadores();
		$data['content']="usuarios/editar";
		$this->load->view('usuarios/template', $data);
	
	}
	public function _enviar_autorizacion ($array){
		
		$data['contacto'] = $array;
                $organizador = $this->Usuario_m->get_organizador_by_id($array['organizador_id']);
                $mensaje = "Estimado ".$array['nombre']." ".$array['apellido']."
		: su solicitud de registro ha sido recibida exitosamente. Después
		de verificar sus datos comerciales su cuenta será activada para
		poder realizar pedidos en nuestro sistema <br /> Muchas Gracias.";
		
                $this->load->library('email');


		$to = $array['email'];

		$this->email->from('info@decoratupared.com.ar', 'Decoratupared');
		$this->email->to($to);				
                $this->email->subject('Bienvenido a Decoratupared');
		$this->email->message($mensaje);
		
		if ( ! $this->email->send())
		{
		    
		}
		$error['mail_1'] = $this->email->print_debugger();
		$this->email->clear();

		$this->load->library('email');
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		
		//Envio de aviso al negocio
		$to = "info@spcgrafica.com";
		$to2 = "lbesedovsky@gmail.com";
		$data['organizador']=$organizador;
		$list = array($organizador['email'], $to2);
                $mensaje = $this->load->view('usuarios/email_registro', $data, TRUE);
		$this->email->from('info@decoratupared.com.ar', 'Decoratupared');
		$this->email->to($list);
		$this->email->subject('Nueva solicitud de registro en Decoratupared.');
                $this->email->message($mensaje);
		
		if ( ! $this->email->send())
		{

		}
		$error['mail_2'] = $this->email->print_debugger();
		return $error;
	}
	
	
        function do_upload($nombre)
	{

	$fileNameParts   = explode( '.', $nombre ); // explode file name to two part
	$fileExtension   = end( $fileNameParts ); // give extension
	$name = md5($nombre);
	$fileExtension   = strtolower( $fileExtension ); // convert to lower case
	$encripted_pic_name   = $name.'.'.$fileExtension;  // new file name
	$nombre = $encripted_pic_name; //set file name
	$config0['file_name'] = $nombre;
        $config0['upload_path'] = FCPATH.'imagenes/logo_cliente/';
	$config0['allowed_types'] = 'gif|jpg|png';
	$config0['max_size']	= '2000';


        $this->load->library('upload');
        $this->upload->initialize($config0);
        if(!file_exists($config0['upload_path']))
	{
	   mkdir($config0['upload_path'], 0777);
	}

        if (!$this->upload->do_upload('logo')) {
            $info = $this->upload->data();

            $error = array('error' => $this->upload->display_errors());

            echo '<pre>';
            print_r($error);
             echo '</pre>';
	      echo '<pre>';
            print_r($config0);
             echo '</pre>';
            die();
        } else {
            $info = $this->upload->data();

            $nombre_archivo_subido = $info['file_name'];
            
        }


	    //CREO EL THUMBNAIL
	    $config['image_library'] = 'gd2';
	    $config['source_image'] = $config0['upload_path'].$nombre_archivo_subido;
	    $config['create_thumb'] = TRUE;
	    $config['maintain_ratio'] = TRUE;
	    $config['width'] = 300;
	    $config['height'] = 300;
	    //$config['thumb_marker'] = "_thumb";

	    $this->load->library('image_lib', $config); 

	    if (!$this->image_lib->resize()) {
		print_r($config);
		echo "<br/>" . 'Imagen para logo:' . $this->image_lib->display_errors();
	    }

        return $nombre_archivo_subido;
	}
	function pedidos()
	{
	    $usuario = $this->session->userdata('usuario');

	    $data['pedidos']=$this->Usuario_m->get_pedidos_by_contacto_id($usuario['id']);
	    $data['content']="usuarios/pedidos";
	    $this->load->view('usuarios/template', $data);
	}


}
