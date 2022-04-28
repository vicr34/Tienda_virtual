<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilosForm.css">
</head>
       <body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 bg-light form-demo rounded mt-5">
                <h2 class="text-center text-secondary">INICIO DE SESION</h2>
                <hr class="bg-light w-75">
                <form action="inicio_sesion.php" method="post">
                    <div class="form-group">
                        <input type="email" name="cor" class="form-control bg-light" placeholder="correo@xyz.com" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="ps" class="form-control bg-light" placeholder="Contraseña" required>
                    </div>
                    <div>
                    <a href="indexcatalogo.php"><i class="produto__icon fas fa-cart"> <font color = "dark"> INICIAR SESION </font>  </i></a>
                    </div>
                </form>
<?php
    if($_POST){
        $b=$_POST['ps'];
        $c=$_POST['cor'];
        $res=$objeto->verificaridentidad($b,$c);
        $fila=$res->fetch_assoc();
        $num= mysqli_num_rows($res);
    }
?>
            </div>
        </div>
    </div>
</body>
</html>