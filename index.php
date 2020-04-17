<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Página Externa de Soporte">
    <meta name="author" content="S7GP Vialidad Nacional">
    <link rel="icon" href="favicon.ico">

    <title>Soporte 404 Externa</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php
  if(isset($_GET[redirect]))
    {
      $ticket = explode("_",$_GET[redirect]);
    }else{
      header("Location: error.php");
      $ticket[0] = "Sin Ticket";
    }
?>
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Vialidad Nacional</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <!---<li class="active"><a href="#">Inicio</a></li>--->
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class=\"cover-heading\">
            <?php
            if($_GET[w] !=1 ){
              echo 'Parece que estas conectado a internet pero no a la red de Vialidad...';
            }else {
              echo "No tenés permiso para acceder a esta página.";
              }
            ?></h1>
            <p class="lead">Este sitio web, solo funciona estando conectado a nuestra red. <br> Si necesitas saber sobre tú requerimiento, podés contactarnos e indicarnos este número: </p>
            <p class="lead">
              <a href="https://soporte.vialidad.gob.ar/index.php?redirect=<?php echo $_GET[redirect]; ?>&w=1"class="btn btn-primary  btn-lg btn-block"> <?php echo $ticket[1]; ?></a>
            </p>
            <p class="lead">Ante cualquier duda o consulta comunicate al *611 desde un teléfono IP, al 011-6089-8999 desde afuera o
desde tu correo de la repartición <a href="mailto:tac@vialidad.gob.ar">tac@vialidad.gob.ar</a> para la generación de una solicitud.</p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Infraestructura 2020<a href="https://www.vialidad.gob.ar"> | Vialidad Nacional</a></p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
