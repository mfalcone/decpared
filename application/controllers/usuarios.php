<?php

class Usuarios extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
 
	

	public function recuperar_clave() {
	    
	    
	    $this->load->library('form_validation');
		
	    $config = array(array( 'field'   => 'email','label' => 'Email','rules'   => 'required|valid_email' ));
            $this->form_validation->set_rules($config); 				
		
	    $this->form_validation->set_message('required', 'El campo %s es obligatorio');
	    $this->form_validation->set_message('valid_email', 'El email ingresado no es valido');
	    
	    if ($this->form_validation->run() == FALSE)
	    {
		$data['mensaje'] = "Ingrese la dirección de mail que completó con el registro";
		$data['content'] = 'usuarios/recuperar_clave';
		$this->load->view('usuarios/template', $data);
		return;
	    }
	    else
	    {

		$mensaje = $this->_recuperar_clave( $this->input->post('email') );
			
		$data['mensaje'] = $mensaje;
		$data['content'] = 'usuarios/recuperar_clave';
		$this->load->view('usuarios/template', $data);
	    }
	}
	
	private function _recuperar_clave( $email ) {
	
	    $query =  $this->db->get_where('contacto', array('email' => $email ) );
	      
	    if( $query->num_rows == 1)
	    {
			    
		$usuario = $query->row_array();					
		
		$caracteres = 8; // número de caracteres a visualizar
		$random_pass = substr(md5(rand()),0,$caracteres);
		//echo $random_pass ; // imprime el password

		$this->db->update('contacto', array('clave' => md5($random_pass) ), array('id' => $usuario['id'] ) );				              

		//Enviar email al negocio de que ha recibido un pedido
		$this->load->library('email');			

		$this->email->from('info@spcgrafica.com', 'Decoratupared');
		$this->email->to( $usuario['email'] );
		$this->email->subject('Recuperar clave.');
		$this->email->message('Ingresa con el usuario: '.$usuario['usuario'].' y con la clave:'.$random_pass." \r\n . Gracias.\r\n");
		if($this->email->send()) {
			return '<span style="color:#000;">Tu nueva clave ha sido enviada a tu email. Procura cambiarla una vez recuperada tu cuenta.</span>'.anchor('login', 'volver');
		}
		else
		{
			//show_error($this->email->print_debugger());
			//echo anchor('index', 'volver');
			$mensaje = 'Lo sentimos. Ha ocurrido un error.';
		}
	    }
	    else
	    {
		return 'Lo sentimos. '.$email.' No está registrado en nuestro sistema. Intente nuevamente con otro correo o contáctese con la empresa';
	    }

	}


}
