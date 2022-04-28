<!-- EJEMPLO DEL REGISTRO DE USUARIOS ***SÓLO ES EL EJEMPLO PARA ENTENDER LA CONEXIÓN** -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/estilosForm.css">

</head>
    <?php
    //include_once ("controllers/tiendaControlador.php");
    //$objeto=new Tienda();
    ?>
    <body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 bg-light form-demo rounded mt-5">
                <h2 class="text-center text-secondary">REGISTRO DE USUARIOS</h2>
                <hr class="bg-light w-75">
                <form action="registro_users.php" method="post">
                    <div class="form-group">
                        <input type="text" name="nom" class="form-control bg-light" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="cor" class="form-control bg-light" placeholder="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="ps" class="form-control bg-light" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="REGISTRARSE">
                    </div>
                    <div>
                    <a href="indexinicio_sesion.php"><i class="produto__icon fas fa-cart-"> <font color = "dark"> INICIAR SESION </font>  </i></a>
                    </div>
                </form>
<?php
  if($_POST){
        $a=$_POST['nom'];
        $b=$_POST['ps'];
        $c=$_POST['cor'];
        $var=$objeto->evitaduplicidad($a,$c);
        if($var == 0){
          $objeto->alta_usuarios($a,$b,$c);
        }
        else 
          echo "Usuario ya registrado";
  }
?>

            </div>
        </div>
    </div>

</body>
</html>