<?php session_start();
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cosas de Tatuadores</title>
    <link rel="icon" href="imagens/cosas%20de%20tatuaje.webp">

    <!-- Bootstrap -->
    <link href="css/Extras.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
</head>

<body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <?php
        if(isset($_SESSION['logueado']) && $_SESSION['logueado']==1){
            ?>
    <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
        <div class="container">

            <!-- header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <a href="index.php" class="navbar-brand">
                    <span class="img-logo">Cosas de Tatuadores</span>
                </a>
            </div>
            <!-- navbar -->
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="AcercaDe.php">Acerca de</a></li>
                    <li><a href="Contacto.php">Contacto</a></li>
                    <li><a href="Preguntas.php">Preguntas Frecuentes</a></li>
                    <li><a href="tienda/Productos.php">Tienda</a></li>
                    <li class="divisor" role="separator"></li>
                    <li><p style="padding-left:60px;padding-top:15px; color:white;">Bienvenido, <?php echo $_SESSION['nombre'];?>.</p></li>
                    <li style="margin-left:60px;" class="divisor" role="separator"></li>
                    <li><a href="logout.php">Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /Nav -->

    <?php
        } else { 
    ?>

    <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
        <div class="container">

            <!-- header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <!-- logo-barra -->
                <a href="index.php" class="navbar-brand">
                    <span class="img-logo">Cosas de Tatuadores</span>
                </a>
            </div>

            <!-- navbar -->
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="AcercaDe.php">Acerca de</a></li>
                    <li><a href="Contacto.php">Contacto</a></li>
                    <li><a href="Preguntas.php">Preguntas Frecuentes</a></li>
                    <li><a href="tienda/Productos.php">Tienda</a></li>
                    <li class="divisor" role="separator"></li>
                    
                    <li><a href="loginForm.php">Inicio de sesion</a></li>
                    <li><a href="signupForm.php">Registrarse</a></li>
                    
                </ul>
            </div>

        </div>
    </nav>
    <!-- /Nav -->
    <?php }?>
   
   
  <!-- capa -->
  <div class="capa">
    <div class="texto-capa">
      <h1>¿Quiénes somos?</h1>
       <p style="text-align: center;font-size: 20px;text-align: justify-all">
            Somos una empresa que lleva años en el mercado, sus creadores y fundadores Darien, Kevin, Uribarrien, Daniel,Ana y Erick, tuvieron la visión de distribuir y vender subministros para tatuadores
            <br>
            lejos solo de distribuir subministros tenemos una tienda  en fisico  para  realizar tatuajes de diferentes estilos, ya sea tradicional japones  anime, neotradicional etc 
            <br>
           se ha convertido en una de las tiendas mas completas y con mejor pocisión del mercado en tan poco tiempo  
          </p>

    </div>
  </div><!-- /capa -->

  
  <section id="servicos" style="background-color:rgb(255,255,255,.5)">
    <div class="container">

      <div class="row">
        <!-- tatto -->
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="row albuns">
            <div class="col-md-6">
              <img src="imagens/IMG_20221130_122148.jpg" class="img-responsive img-rounded">
            </div>


          </div><!-- /row 01 -->

        </div>

        <!-- Servicios -->
        <div class="col-xs-12 col-sm-6 col-md-6">
          <h2>Productos de máxima calidad y con excelente servició al cliente </h2>
          <p>
            para poder comprar todo se hace a través de nuestra pagina oficial, que cuenta con su plataforma de ventas donde permitira a los clientes 
            realizar sus pedidos
            <br>
           Cuenta con un área de revisión y empaque para la salida de todos los pedidos que se realizan a diario, el cual es monitoreado y supervisado para que el producto funcione correctamente, el empaque y/o embalaje sea el adecuado para que lleguen de la mejor manera los productos e insumos que nos pide el cliente.
            <br>
            Todos nuestros productos son completamente originales, ya que trabajamos directamente con las marcas para su comodidad y que esten seguros de lo que estan recibiendo si tienen mas dudas pueden contactarse con nosotros  
          </p>

        </div><!-- /servicios -->

      </div><!-- /row -->

    </div> <!-- /Container -->
  </section>

   
   <!-- Rodape -->
    <footer id="rodape">
        <div class="container">
            <div class="row">

                <!-- logo -->
                <div class="col-md-2">
                    <span class="">Cosas de Tatuajes</span>
                </div>


                <div class="col-md-2">
                    <h4>Cosas de tatuajes</h4>
                    <ul class="nav">
                        <li> <a href="#">Extras</a></li>
                        <li> <a href="#">Entregas</a></li>
                        <li> <a href="#">Sobre Nosotros</a></li>
                        <li> <a href="#">Novedades</a></li>
                    </ul>
                </div>

                <!-- comunidades -->
                <div class="col-md-2">
                    <h4>Comunidades</h4>
                    <ul class="nav">
                        <li><a href="#">Artistas</a></li>
                        <li><a href="#">Estilos</a></li>
                        <li><a href="#">Marcas</a></li>
                    </ul>
                </div>



                <!-- redes solciais -->
                <div class="col-md-4">
                    <ul class="nav">
                        <li class="item-rede-social">
                            <a href=""><img src="">
                            </a>
                        </li>
                        <li class="item-rede-social">
                            <a href="#" class="btn btn-md btn-custom btn-roxo">Intagram</a>
                            <br>
                        </li>
                        <li class="item-rede-social">
                            <a href="#" class="btn btn-md btn-custom btn-roxo">Facebook</a>
                        </li>
                    </ul>
                    <a href="" style="margin-right:10px" target="">
                        <img src="">
                    </a>

                    <span style="text-align:justify;">
                        <strong style="color: aliceblue"></strong>
                        |<span >Proyecto ficticio para la Universidad Autónoma de Aguascalientes.</span> | &copy; 2022
                    </span>
                </div>


            </div><!-- /row -->
        </div> <!-- /Container -->
    </footer>
</body>
</html>