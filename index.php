<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="bg-light">
    <section class="container">
        <h1 class="text-center my-5">Iniciar sesión</h1>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <?php
                    if(isset($_SESSION['error'])): ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong>Error</strong> Correo o contraseña
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    <?php unset($_SESSION['error'])?>
                <?php endif?>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <input name="usuario" type="text" class="form-control" placeholder="Usuario" required="">
                    </div>
                    <div class="form-group">
                        <input name="clave" type="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <input name="enviar" type="submit" value="Iniciar" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </section>

     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>