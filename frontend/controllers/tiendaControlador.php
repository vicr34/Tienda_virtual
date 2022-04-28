
<?php

// SÓLO ES EJEMPLO DEL CONTROLADOR DEL MODELO, CADA EQUIPO  A CARGO 
// DEBE DESARROLLAR EL SUYO  EN EL CASO DE SER NECESARIO Y ESTABLECER LAS FUNCIONES QUE REQUIERAN

//FUNCIONA CON TIENDAMODEL


defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("tiendaModel");
        $this->load->helper(array('form'));
    }

    public function index(){
        $mostrar=$this->tiendaModel->mostrar();
        $info["consulta"]=$mostrar;
        $info[""]="";
        $this->load->view('',$info);//Se carga vista
    }
}
?>
    