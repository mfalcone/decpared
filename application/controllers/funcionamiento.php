<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Funcionamiento extends CI_Controller {
        public function __construct() {
        parent::__construct();
        $this->load->model('institucional_m', 'Institucional_m');
    }

	public function index()
	{
		$data['noticias'] = $this->Institucional_m->get_all($this->uri->segment(2));
		$data['content']="funcionamiento";
		$this->load->view('includes/template', $data);
	}
}
