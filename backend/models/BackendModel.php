<?php
//El modelo es la interacción con la BD

// SÓLO ES EJEMPLO DEL MODELO, CADA EQUIPO  A CARGO 
// DEBE DESARROLLAR EL SUYO  EN EL CASO DE SER NECESARIO, Y CARGARLO CON SU VISTA RESPECTIVA 


//FUNCIONA CON BACKENDCONTROLADOR

class BackendModel extends CI_model{
  
  public function __construct(){
    $this->load->database('ti');
  }

  public function mostrar(){
     return $res= $this->db->get('usuario');
 
  }