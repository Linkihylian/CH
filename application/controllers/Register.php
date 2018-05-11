<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct(){

			parent::__construct();
			$this->load->helper('url');
	}

	public function index()
	{
		$datos["titulo_pagina"] = "CH-Project";
		$this->load->view('secciones/cabecera.php', $datos);
		$this->load->view('login/register.php');
		$this->load->view('secciones/pie_de_pagina.php');

	}
}
