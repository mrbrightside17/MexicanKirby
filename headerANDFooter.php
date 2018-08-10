<?php

function printHeader($active){
    ?>


    <div class="container-full">
      <header>
        <div class="row">
          <div class="col-md-12" id="datosSuperior">
            <p><i class="fa fa-envelope"></i>correo@gmail.com
              <i class="fa fa-phone"></i> 740 90 85 - 310 678 4536 (Whats App)</span>
            </p>
          </div>
        </div>
        <div class="UpperContactBarInferior"></div>
        <!--Website's logo-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="logo">
                <img class="img-responsive" src="img/logo.png" alt="">
              </div>
            </div>
            <div class="col-sm-6">
              <img class="img-responsive" src="img/reserva.png" alt="">
            </div>
          </div>
        </div>

        <!--Navigation Bar-->
        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav" id="navbar-menu">
                <li <?php if($active == "inicio") echo "class='active'" ; ?>  ><a href="index.php">INICIO<span class="sr-only">(current)</span></a></li>
                <li <?php if($active == "servicios") echo "class='active'" ; ?> ><a href="servicios.php">SERVICIOS</a></li>
                <li <?php if($active == "fotos") echo "class='active'" ; ?> ><a href="fotos.php">FOTOS</a></li>
                <li <?php if($active == "videos") echo "class='active'" ; ?>><a href="videos.php">VIDEOS</a></li>
                <li <?php if($active == "repertorio") echo "class='active'" ; ?> ><a  href="repertorio.php">REPERTORIO</a></li>
                <li <?php if($active == "contactenos") echo "class='active'" ; ?> ><a href="contactenos.php">CONTÁCTANOS</a></li>
                <!--<li <?php if($active == "contratenos") echo "class='active'" ; ?> ><a href="contratenos.php">CONTRÁTENOS</a></li>-->
                <li <?php if($active == "pago") echo "class='active'" ; ?> ><a href="pagos.php">PAGOS</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="" target="_blank">¡CONTRÁTENOS!</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
    </div>

    <?php
}


function printFooter(){
  ?>
  <footer class="footing">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-4">
            <img src="img/logo.png" class="img-responsive" alt="logo">
            <h2>¡Reserve ahora!</h2>
          </div>
          <div class="col-sm-4 text-center">

            <h4>Teléfono fijo:</h4>
            <p>740 90 85 Bogotá - Colombia</p>
            <h4>Celular:</h4>
            <p>310 678 4536 (WhatsApp)</p>
            <h4>E-mail:</h4>
            <p>correo@gmail.com</p>
          </div>
          <div class="col-sm-4">
            <div class="row">
              <div class=" col-xs-3 col-sm-3 text-center">
                <a href="https://www.facebook.com/pages/Mariachi-Juvenil-De-Colombia/121332011250047" target="_blank">
                    <span class="fa-stack fa-2x">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
              </div>
              <div class=" col-xs-3 col-sm-3 text-center">
                <a href="https://twitter.com/mariachicolomb" target="_blank">
                    <span class="fa-stack fa-2x">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
              </div>
              <div class=" col-xs-3 col-sm-3 text-center">
                <a href="https://instagram.com/mariachijuvenildecolombia/" target="_blank">
                  <span class="fa-stack fa-2x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </div>
              <div class=" col-xs-3 col-sm-3 text-center">
                <a href="https://www.youtube.com/user/MariachisdeColombiaa" target="_blank">
                  <span class="fa-stack fa-2x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-youtube-play fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 text-center">
                <img class="img-responsive" src="img/pay.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="UpperContactBarInferior"></div>
    <div class="UpperContactBarInferior"></div>
    <div class="UpperContactBarInferior"></div>
  <?php
}

?>
