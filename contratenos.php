<?php
  include_once("headerANDFooter.php");
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mariachi Explosión de México</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/HeaderFooter.css">
    <link rel="stylesheet" href="css/contratenos.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    
  </head>
  <body>
    <!--Header-->
    <?php
      printHeader("contratenos");  
    ?>
    <!--Carousel-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <h2>¡Reserve Ahora!</h2>
          <div class="form-group">
            
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre">
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" class="form-control" id="telefono">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" class="form-control" id="direccion">
          </div>
          <div class="form-group">
            <label for="comment">Comentarios:</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>
          <div id="res"></div>
          <div class="form-group">
            <button id="enviar" type="button" class="btn btn-primary btn-lg"name="button">Enviar</button>
          </div>
          
        </div>
        <br>
      </div>
    </div>

    <br>
    <div class="UpperContactBarInferior"></div>
    <?php printFooter(); ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/contratenos.js"></script>
  </body>
</html>
