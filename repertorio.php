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
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/repertorio.css">

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/reproductor.js"></script>    
  </head>
  <body>
    <!--Header-->
    <?php
      printHeader("repertorio");
    ?>
  <div class="container-fluid">
    <div class="col-xs-12 text-center">
      <h2>Repertorio de canciones</h2>
    </div>

    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
      <audio src="Mariachi.mp3" id="miAudio" controls="controls" type="audio/mpeg" preload="preload">
      </audio>
      <span id="nombreMiAudio"></span>
    </div>


  </div>


  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4">
        <h3>Lorem ipsum</h3>
        <ul class="list-group">
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
        </ul>
      </div>
      <div class="col-sm-4">
        <h3>Lorem ipsum</h3>
        <ul class="list-group">
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
        </ul>
      </div>
      <div class="col-sm-4">
        <h3>Lorem ipsum</h3>
        <ul class="list-group">
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <h3>Lorem ipsum</h3>
        <ul class="list-group">
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
        </ul>
      </div>
      <div class="col-sm-4">
        <h3>Lorem ipsum</h3>
        <ul class="list-group">
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
        </ul>
      </div>
      <div class="col-sm-4">
        <h3>Lorem ipsum</h3>
        <ul class="list-group">
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
          <li class="list-group-item">lorem ipsum</li>
        </ul>
      </div>
    </div>
  </div>
    <div class="UpperContactBarInferior"></div>
    <?php printFooter(); ?>
  </body>
</html>
