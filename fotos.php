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
    <link rel="stylesheet" href="css/fotos.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/fotos.js"></script>
  </head>
  <body>
    <!--Header-->
    <?php
      printHeader("fotos");
    ?>
    <div class="container-fluid">
      <div class="col-sm-12">
        <div class="row">
          <div class="column">
            <img id="1" src="img/slides/1.jpg" class="img-responsive gallery" alt="">
            <img id="2" src="img/slides/2.jpg" class="img-responsive gallery" alt="">
            <img id="3" src="img/slides/3.jpg" class="img-responsive gallery" alt="">
            <img id="4" src="img/slides/4.jpg" class="img-responsive gallery" alt="">
          </div>
          <div class="column">
            <img id="5" src="img/slides/5.jpg" class="img-responsive gallery" alt="">
            <img id="6" src="img/slides/6.jpg" class="img-responsive gallery" alt="">
            <img id="7" src="img/slides/7.jpg" class="img-responsive gallery" alt="">
            <img id="8" src="img/slides/8.jpg" class="img-responsive gallery" alt="">
          </div>
          <div class="column">
            <img id="9" src="img/slides/9.jpg" class="img-responsive gallery" alt="">
            <img id="10" src="img/slides/10.jpg" class="img-responsive gallery" alt="">
            <img id="11" src="img/slides/11.jpg" class="img-responsive gallery" alt="">
            <img id="12" src="img/slides/12.jpg" class="img-responsive gallery" alt="">
          </div>
        </div>
      </div>
    </div>

    <div id="myModal" class="modal">
      <span id="close">&times;</span>
      <img class="modal-content" id="img01">
      <a class="prev" onclick="update(-1)">&#10094;</a>
      <a class="next" onclick="update(1)">&#10095;</a>
    </div>

    <div class="UpperContactBarInferior"></div>
    <?php printFooter(); ?>
  </body>
</html>
