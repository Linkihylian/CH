<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password_recovery extends CI_Controller {
	function __construct(){
			parent::__construct();
			//Cargamos la librería de validación (todos las librerias, helpers, etc pueden ser cargados en los controladores o auto cargarlos indicándolo en los ficheros de configuración)
        $this->load->library('form_validation');

	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('login_register/password.php');

	}
	public function recibirFormulario(){



}
}
