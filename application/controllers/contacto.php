<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {
function __construct() {
     
	     parent::__construct();
	     $this->load->model('propiedad_m', 'Propiedad_m');

	 }

	public function index()
	{
		$contacto = $this->session->userdata('usuario');
		$data['categorias_menu'] = $this->categorias_menu();
		$data['contacto']=$this->db->where(array('id'=>$contacto['id']))
		->limit(1)
		->get('contacto')
		->row_array();
		
          
	  $data['content']="contacto";
	  $this->load->view('includes/template', $data);
	}
	function pedido()
	{
		$contacto = $this->session->userdata('usuario');
		$items = $this->cart->contents();
		$pedido_id = $this->Propiedad_m->crear_pedido($contacto, $items);
		$detalle="";
		
                $cuerpo ="<h3>Datos Distribuidor</h3>";
		$cuerpo .="<p>";
		$cuerpo .= "<strong>Nombre: </strong>".$contacto['nombre']."<br />";
		$cuerpo .= "<strong>Apellido: </strong>".$contacto['apellido']."<br />";
		$cuerpo .= "<strong>email: </strong>".$contacto['email']."<br />";
		$cuerpo .= "<strong>Código del cliente: </strong>".$contacto['id']."<br />";
		$cuerpo .= "<strong>Código del Coordinador: </strong>".$contacto['organizador_id']."<br />";
		$cuerpo .="<h3>Detalle del pedido #".$pedido_id."</h3>";
		$cuerpo .="<p>";
		$cuerpo .="<hr />";
		$precio_total="";
		$m2 = "";
		foreach($items as $item)
		{
			  $m2prov= $this->Propiedad_m->precio_by_material_id($item['options']['material_id']);
			  $m2 =$m2+$item['price'];
			  $precio_unitario=$this->Propiedad_m->get_precio_2($item['options']['alto'],$item['options']['ancho'],$item['options']['material_id']);
			  $cuerpo .="<p>";
			  $cuerpo .='<img src="'.base_url().'imagenes/pedidos/'.$item['rowid'].'.jpeg" /> <br />';
			  $cuerpo .= "<strong>Código imagen: </strong>".$item['options']['codigo']."<br />";
			  $cuerpo .="<strong>Precio unitario: </strong>$".$precio_unitario." +iva<br />";
			  $cuerpo .="<strong>Superficie: </strong>".$item['price']." m2<br />";
			  $cuerpo .= "<strong>Cantidad: </strong>".$item['qty']."<br />";
			  $cuerpo .= "<strong>Nombre: </strong>".$item['name']."<br />";
			  $cuerpo .= "<strong>Alto: </strong> ".$item['options']['alto']." cm<br />";
			  $cuerpo .= "<strong>Ancho: </strong> ".$item['options']['ancho']." cm<br />";
			  $cuerpo .= "<strong>Material: </strong> ".$this->Propiedad_m->material_by_id($item['options']['material_id'])."<br />";
			  $cuerpo .= "<strong>Valor Material: </strong> $".$m2prov."<br />";
			  $cuerpo .= "<strong>Recorte X: </strong> ".$item['options']['x']."<br />";
			  $cuerpo .= "<strong>Recorte Y: </strong> ".$item['options']['y']."<br />";
			  $cuerpo .="<p>";
			  $cuerpo .="<hr />";
			  $precio_total=$precio_total+$precio_unitario;
		}
                $iva = round((21*($precio_total/100)),2);
		
		$cuerpo .="<p>";
		$cuerpo .="<hr />";
		$cuerpo .= "<strong>Subtotal: </strong>$".$precio_total."<br />";
		$cuerpo .= "<strong>M2: </strong>".$m2." m2<br />";
		$cuerpo .= "<strong>IVA: (21%)</strong> $".$iva."<br />";
		$cuerpo .= "<strong>TOTAL:</strong> $".round(($precio_total+$iva),2)."<br />";
		$cuerpo .= "Opcional envío a domicilio por OCA (embalaje incluído): $ 180,00";
		$cuerpo .="<hr />";
		$cuerpo .="</p>";
		$cuerpo .= "<strong>Le informamos que:</strong>
			  <ul>
			  <li>Su pedido deberá ser confirmado efectuando el pago dentro de los próximos 7 días.</li>
			  <li>Solicitamos nos remita por este mismo medio el comprobante de pago correspondiente.</li>
			  <li>Una vez por ud. confirmado, recibirá nuestro e-mail de aceptación del pedido.</li>
			  <li>El plazo de entrega estimado para despacho: 7 días a partir de la aceptación.</li>
			  </ul>";
		$cuerpo .="<h3>listado de las cuentas bancarias de SPC para transferencia o depósito</h3>
		<p>
		<br />
		
		<strong> CUIT SPC Identificación Gráfica S.R.L.:</strong> 30-70748994-0<br />
		<hr />
		<strong>BANCO MACRO</strong><br />
		SUCURSAL: 797 ROSARIO CORRIENTES<br />
		CTA CTE EN PESOS nº 3-797-0000004010-7<br />
		CBU 2850797430000000401071<br />
		<hr />
		<strong>NUEVO BANCO DE SANTA FE</strong><br />
		SUCURSAL: CASA ROSARIO<br />
		CTA CTE EN PESOS nº 47401/00<br />
		CBU 3300000610000047401003<br />
		<hr />
		<strong>BANCO MUNICIPAL DE ROSARIO</strong><br />
		SUCURSAL: 20 – CENTRO<br />
		CTA CTE EN PESOS nº 9376/5<br />
		CBU 0650020701000000937657<br />
		<hr />
		<strong>BANCO SANTANDER RIO</strong><br />
		SUCURSAL: 237<br />
		CTA CTE EN PESOS nº 237-000037066<br />
		CBU 0720237920000000370668<br />
		<hr />
		<strong>BBVA BANCO FRANCES</strong><br />
		SUCURSAL 282<br />
		CTA CTE EN PESOS nº 282/004374/8<br />
		CBU 0170282020000000437488<br /></p>";
		
		
		$this->load->library('email');
	
		$this->email->from('info@decoratupared.com.ar', 'Decora tu Pared');
		$this->email->to('info@wdesign.com.ar');
		//$this->email->to('info@spcgrafica.com');
		$this->email->cc($contacto['mail_organizador']);
		$this->email->set_mailtype("html");
		$this->email->cc('info@wdesign.com.ar');
		$this->email->subject("nuevo pedido decoratupared");
		$this->email->message($cuerpo);
	
		if ($this->email->send())
		    {
			$this->cart->destroy();
			redirect('/');
		    }
		    else
		    {
			show_error($this->email->print_debugger());
		    }
	}
	public function servicio()
	{
		$data['content']="atencion_al_cliente";
		$this->load->view('includes/template', $data);
	}
	public function contacto_exito()
	{
		$contacto = $this->session->userdata('usuario');
		$data['contacto']=$this->db->where(array('id'=>$contacto['id']))
		->limit(1)
		->get('contacto')
		->row_array();
		$data['exito'] = "Su mensaje ha sido enviado con éxito, le responderemos a la brevedad. Muchas Gracias";
		$data['content']="contacto";
		$this->load->view('includes/template', $data);
	}
	 function enviar() {
         //VALIDACION DEL FORMULARIO
		$config = array(
		    array(
	
			'field' => 'nombre',
			'label' => 'Nombre',
			'rules' => 'trim|required'
		    ),
	
		   
	
		    array(
			'field' => 'email',
			'label' => 'Email Particular',
			'rules' => 'trim|required|valid_email',
		    ),
		    array(
			'field' => 'comentario',
			'label' => 'comentario',
			'rules' => 'trim|required',
		    ),
		);
		$this->load->library('form_validation');
		$this->form_validation->set_rules($config);
		$this->form_validation->set_message('required', 'El campo  %s no puede estar vacio.');
		$this->form_validation->set_message('valid_email', 'El campo %s debe ser un email valido ');
		$this->form_validation->set_error_delimiters('<div class="error" style="font-weight:bold; font-size:14px;">', '</div>');
         
	

		if ($this->form_validation->run() == TRUE) {	
		 
                $contacto = $this->session->userdata('usuario');
		
		$mensaje = 'Nombre:  '.$this->input->post('nombre')."\n\r";
		$mensaje .= 'Email:  '.$this->input->post('email')."\n\r";
		$mensaje .= 'Consulta:  '.$this->input->post('comentario')."\n\r";
	
		$this->load->library('email');
	
		$this->email->from($this->input->post('email'), $this->input->post('nombre'));
		$this->email->to('info@wdesign.com.ar');
		//$this->email->to('info@spcgrafica.com');
		$this->email->cc($contacto['mail_organizador']);
		$this->email->cc('info@wdesign.com.ar');
		$this->email->subject('Contacto desde la web decoratupared.com');
		$this->email->message($mensaje);
	
		if ($this->email->send())
		    {
			$this->contacto_exito();
		    }
		    else
		    {
			show_error($this->email->print_debugger());
		    }
	    }
	    else
	    {
		$this->index();
		//echo $this->email->print_debugger();
	    }	
    }
    function categorias_menu()
	{
		$data['tema']=$this->Propiedad_m->get_nombre_by_tipo('tema');
		$data['color']=$this->Propiedad_m->get_nombre_by_tipo('color');
		$data['ambiente']=$this->Propiedad_m->get_nombre_by_tipo('ambiente');
		return $data;
	}


}
