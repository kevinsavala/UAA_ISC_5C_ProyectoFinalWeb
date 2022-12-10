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
            <h1>Tatuajes Recomendados</h1>
            <a href="Anime.php" class="btn btn-lg btn-custom btn-roxo">Anime</a>
            <a href="Japones.php" class="btn btn-lg btn-custom btn-branco">Estilo Japones</a>

        </div>
    </div><!-- /capa -->

    <!-- ====Conteudo==== -->
    <!-- Seção de Serviços -->
    <section id="servicos">
        <div class="container">

            <div class="row">
                <!-- tatto -->
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="row albuns">
                        <div class="col-md-6">
                            <img src="imagens/Ray.jpg" class="img-responsive img-rounded">
                        </div>


                    </div><!-- /row 01 -->

                </div>

                <!-- Servicios -->
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h2>¿Quiénes somos?</h2>
                    <p>
                        Somos la mejor tienda de productos de tatuaje en Aguascalientes.Desde el 2015 esta tienda ha surtido a cientos de estudios de tatuaje en Aguascalientes, brindando los productos de mejor calidad a los mejores precios del mercado.
                        <br>
                        En Cosas de Tatuaje te aseguramos que estaras satisfecho con tu compra, y si no lo estas contamos con devolucion gratis.
                        <br>
                        Estamos celebrando nuestra apertura online! Utiliza el codigo APERTURACDT para obtener un descuento de 50 pesos en cualquiera de tus compras.
                    </p>

                </div><!-- /servicios -->

            </div><!-- /row -->

        </div> <!-- /Container -->
    </section>

    <!-- Sessão de Recursos -->
    <section id="recursos">
        <div class="container">
            <div class="row">

                <!-- Recursos-->
                <div class="col-md-6">
                    <h2>Nose que poner</h2>

                    <h3>agregar...</h3>
                    <p>
                        ---
                    </p>

                    <h3>Extra</h3>
                    <p>
                        ----
                    </p>

                </div>

            </div><!-- /row -->
        </div><!-- /Container -->
    </section>
    <section id="seccion">
        <a href="">
            <button class="greenBox">
                Subir
            </button>
        </a>
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
                            <a href="provisionalLogin.php" class="btn btn-md btn-custom btn-roxo">Test Login</a>
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
