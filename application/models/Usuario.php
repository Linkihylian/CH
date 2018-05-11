<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database("default");
  }


  public function valida_clave_correo($correo, $clave){
    $this->db->where("correo", $correo);
    $this->db->where("clave",  $clave);
    $query = $this->db->get("usuarios");
    return $query->result();
  }

  public function comprobar_correo($correo){
    $this->db->where("correo", $correo);
    $query = $this->db->get("usuarios");
    return $query->result();
  }


  public function modificar($datos, $id){
    $this->db->where("id_usuario", $id);
    $this->db->update("usuarios", $datos);
  }

  public function consultar_hash($hash){
    $this->db->where("hash", $hash);
    $query = $this->db->get("usuarios");
    return $query->result();
  }


}
