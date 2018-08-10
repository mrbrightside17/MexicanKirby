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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <!--Header-->
    <?php
      printHeader("inicio");  
    ?>
    <!--Carousel-->
    <div class="container-full">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

          <div class="item active">
            <img src="img/la.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>LA is always so much fun!</p>
            </div>
          </div>

          <div class="item">
            <img src="img/chicago.jpg" alt="Chicago" style="width:100%;">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>

          <div class="item">
            <img src="img/ny.jpg" alt="New York" style="width:100%;">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>
          </div>

          <div class="item">
            <img src="img/test.jpg" alt="test" style="width:100%;">
            <div class="carousel-caption">
              <h3>Some Image test</h3>
              <p>We love tests!</p>
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
      </div>
    </div>
    <div class="container-fluid">
      <div class="row whyUsSection">

        <div class="col-sm-6">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YAnDocr7Ph4" allowfullscreen></iframe>
          </div>
        </div>

        <div class="col-sm-6 whyUs">
          <h2 class="">POR QUÉ ELEGIRNOS</h2>
          <div class="text">
            <p>
              El Mariachi Juvenil de Colombia es la única empresa de mariachis en Bogotá que le brinda calidad,
               seguridad y respeto a la hora de contratar su serenata. Contamos con los mejores mariachis en Bogotá, 
               profesionales, apuestos, jóvenes, responsables y comprometidos, los cuales le brindaran una muy grata 
               serenata ya que contamos con una alta exigencia musical y excelentes shows coreográficos entre ellos
                show de zapateo mexicano. Contrate con el Mariachi Juvenil de Colombia su serenata en Bogotá con total
                 tranquilidad y seguridad de nuestro cumplimiento.
            </p>
            <p>
              En el Mariachi Juvenil de Colombia Siempre estamos en búsqueda de la excelencia y la satisfacción total del
               cliente, por esta y más razónes somos su mejor opción. Un mariachi económico y de calidad.
            </p>
          </div>
        </div>
        
      </div>
      

      <div class="row serviciosSection">
        <div class="col-xs-12 serviciosHeader">
          <h2>CLIENTES CORPORATIVOS</h2>
          <p>
            <b>El Mariachi Juvenil de Colombia</b> es la elección perfecta para 
            hacer de sus reuniones momentos inolvidables.
          </p>
        </div>

        <div class="col-xs-12 imgsServicios">
          <figure class="col-xs-6 col-sm-3">
            <a href="#">
              <img src="img/clientes.jpg" alt="">
            </a>
          </figure>
          <figure class="col-xs-6 col-sm-3">
            <a href="#">
              <img src="img/clientes.jpg" alt="">
            </a>
          </figure>
          <figure class="col-xs-6 col-sm-3">
            <a href="#">
              <img src="img/clientes.jpg" alt="">
            </a>
          </figure>
          <figure class="col-xs-6 col-sm-3">
            <a href="#">
              <img src="img/clientes.jpg" alt="">
            </a>
          </figure>
          <figure class="col-xs-6 col-sm-3">
            <a href="#">
              <img src="img/clientes.jpg" alt="">
            </a>
          </figure>
          <figure class="col-xs-6 col-sm-3">
            <a href="#">
              <img src="img/clientes.jpg" alt="">
            </a>
          </figure>
          <figure class="col-xs-6 col-sm-3">
            <a href="#">
              <img src="img/clientes.jpg" alt="">
            </a>
          </figure>
          <figure class="col-xs-6 col-sm-3">
            <a href="#">
              <img src="img/clientes.jpg" alt="">
            </a>
          </figure>
          
        </div>
      </div>


      <div class="row clientesSection">
        <div class="col-xs-12 clientesHeader">
          <h2>CLIENTES CORPORATIVOS</h2>
          <p>
            <b>El Mariachi Juvenil de Colombia</b> Siempre estamos en búsqueda
             de la excelencia y la satisfacción total del cliente.
          </p>
        </div>



        <div class="col-xs-12 imgsClientes">
          <div class="col-xs-6 col-md-3 col-md-2">
            <figure>
              <img src="img/clientes.jpg" alt="">
            </figure>
          </div>
          <div class="col-xs-6 col-md-3 col-md-2">
            <figure>
              <img src="img/clientes.jpg" alt="">
            </figure>
          </div>
          <div class="col-xs-6 col-md-3 col-md-2">
            <figure>
              <img src="img/clientes.jpg" alt="">
            </figure>
          </div>
          <div class="col-xs-6 col-md-3 col-md-2">
            <figure>
              <img src="img/clientes.jpg" alt="">
            </figure>
          </div>
          <div class="col-xs-6 col-md-3 col-md-2">
            <figure>
              <img src="img/clientes.jpg" alt="">
            </figure>
          </div>
          <div class="col-xs-6 col-md-3 col-md-2">
            <figure>
              <img src="img/clientes.jpg" alt="">
            </figure>
          </div>
          <div class="col-xs-6 col-md-3 col-md-2 col-md-offset-4">
            <figure>
              <img src="img/clientes.jpg" alt="">
            </figure>
          </div>
          <div class="col-xs-6 col-md-3 col-md-2">
            <figure>
              <img src="img/clientes.jpg" alt="">
            </figure>
          </div>
        </div>
      </div>



    </div>
    <div class="UpperContactBarInferior"></div>
    <?php printFooter(); ?>
  </body>
</html>
