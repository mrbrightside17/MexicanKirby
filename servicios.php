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
    <link rel="stylesheet" href="css/servicios.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <!--Header-->
    <?php
      printHeader("servicios");
    ?>
    <!--Carousel-->
    <div id="servicios" class="container-fluid">
      <div class="col-xs-12 text-center servicio">
        <h2>Servicios</h2>
      </div>
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5 text-center">
          <div class="col-xs-12 UpperContactBarInferior"></div>

          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/la.jpg" alt="Los Angeles" style="width:100%;">
              </div>
              <div class="item">
                <img src="img/chicago.jpg" alt="Chicago" style="width:100%;">
              </div>
              <div class="item">
                <img src="img/ny.jpg" alt="New York" style="width:100%;">
              </div>
              <div class="item">
                <img src="img/test.jpg" alt="test" style="width:100%;">
                </div>
              </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
            <div class="UpperContactBarInferior"></div>
          </div>

          <div class="col-sm-5">
            <div class="col-xs-12 text-left servicio">
              <h3>Serenata Sencilla</h3>
              <div class="col-xs-12 text-justify">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="pagos.php" class="btn btn-primary btn-lg">Pagar ahora</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="UpperContactBarInferior"></div>
    <?php printFooter(); ?>
  </body>
</html>
