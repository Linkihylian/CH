<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
			parent::__construct();
      $this->load->helper('url');
	}

	public function index()
	{
		$datos["titulo_pagina"] = "CH-Project";
		$this->load->view('secciones/cabecera.php', $datos);
		$this->load->view('login/login.php');
		$this->load->view('secciones/pie_de_pagina.php');
	}


 // Recuperar_clave T-bone

 public function recuperar(){

   $this->load->model("usuario");

   $a = $this->usuario->comprobar_correo($this->input->post("correo"));
   if(!empty($a)){

     // agregar nueva clave php
     $fecha = date("Y-m-d h:i:sa");
     $hash = hash("crc32", $fecha);
     $this->usuario->modificar(["hash" => $hash], $a[0]->id_usuario);


     $correo = [
       "destinatario" 	=> $a[0]->correo,
       "mensaje" 			=> "Para recuperar su contraseña ingrese en ".base_url()."index.php/recuperar_clave/recuperar_clave_pagina/".$hash
     ];

     $r = $this->enviar_correo_gmail($correo);
     if (empty($r)) {
       echo "<script>alerta('success', 'Correcto', 'Correo enviado'); </script>";
     }
     else{
       echo "<script>alerta('error', 'Error', 'Error al enviar el correo')</script>";
     }


   }
   else{
     echo "<script>alerta('error', 'Error', 'Correo invalido')</script>";
   }

 }


 private function enviar_correo_gmail($correo){
   $this->load->library("email");
   $configGmail = array(
     'protocol' 	=> 'smtp',
     'smtp_host' => 'ssl://smtp.gmail.com',
     'smtp_port' => 465,
     'smtp_user' => 'solarte.ast@gmail.com',
     'smtp_pass' => '3009177sa',
     'mailtype' 	=> 'html',
     'charset' 	=> 'utf-8',
     'newline' 	=> "\r\n"
   );

   $this->email->initialize($configGmail);
   $this->email->from('solarte.ast@gmail.com');
   $this->email->to($correo["destinatario"]);
   $this->email->subject('Recuperar clave');
   $this->email->message($correo["mensaje"]);
   $r = $this->email->send();
   if (!$r) {
       return $this->email->print_debugger();
   }

 }



 public function recuperar_clave_pagina($hash){
   $this->load->model("usuario");
   $datos["titulo_pagina"] = "Inicio";
   $datos["usuario"] = NULL;

   if (!empty($hash)) {
     $datos["usuario"] = $this->usuario->consultar_hash($hash);
   }


   $this->load->view("secciones/cabecera.php", $datos);
   $this->load->view('recuperar_final.php');
   $this->load->view("secciones/final_pagina.php");
 }


 public function modificar(){
   $this->load->model("usuario");
   $id = $this->input->post("usuario");
   $this->usuario->modificar(["clave" => $this->input->post("clave")], $id);
   echo '<script>window.location.href = "'.base_url().'index.php/"; </script>';
 }


//Final Recuperar T-bone
}
