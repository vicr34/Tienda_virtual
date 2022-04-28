<?php
//El modelo es la interacción con la BD

// SÓLO ES EJEMPLO DEL MODELO, CADA EQUIPO  A CARGO 
// DEBE DESARROLLAR EL SUYO  EN EL CASO DE SER NECESARIO, Y CARGARLO CON SU VISTA RESPECTIVA 


//FUNCIONA CON TIENDACONTROLADOR
class TiendaModel extends CI_model{

  public function __construct(){ 
    $this->load->database('ti');
  }

  public function mostrar(){
     return $res= $this->db->get('usuario');
}
  public function alta_usuarios($a,$b,$c){
     $consulta="INSERT INTO usuario (name, password, email) VALUES ('".$a."','".$b."','".$c."')";
    if($this->conn->query($consulta))
      echo "usuario registrado";
  }
  public function evitaduplicidad($t,$i){
    echo $consulta="SELECT * FROM usuario WHERE usuario='".$t."' and password ='".$i."'";
    $res=$this->conn->query($consulta);
    $num= mysqli_num_rows($res);
    return $num;
  }
   public function verificaridentidad($t,$i){
      echo $consulta="SELECT * FROM usuario WHERE usuario='".$t."' and password ='".$i."'";
    $res=$this->conn->query($consulta);
    $num= mysqli_num_rows($res);
    return $res;
    }  
}