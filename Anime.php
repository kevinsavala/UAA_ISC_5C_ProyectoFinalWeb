<?php session_start();
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cosas de Tatuajes | Anime</title>
    <link rel="icon" href="imagens/cosas%20de%20tatuaje.webp">
    <link rel="stylesheet" href="css/Gallery.css">
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
                    <li><a href="Acercade.php">Acerca de</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="Preguntas.php">Preguntas Frecuentes</a></li>
                    <li><a href="tienda/Productos.php">Tienda</a></li>
                    <li class="divisor" role="separator"></li>
                    <li>
                        <p style="padding-left:60px;padding-top:15px; color:white;">Bienvenido, <?php echo $_SESSION['nombre'];?>.</p>
                    </li>
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
                    <li><a href="Acercade.php">Acerca de</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
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
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="galeria">
        <h1>Galeria De Tatuajes Estilo Anime</h1>
        <div class="linea"></div>
        <div class="contenedor-imagenes">
            <div class="imagen">
                <img src="imagens/Levi Ackerman Tatto.jpg" alt="">
                <div class="overlay">
                    <h2>Levi Ackerman</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagens/Chansawman.jpg" alt="">
                <div class="overlay">
                    <h2>Suscribete</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagens/Megumi%20Fushiguro.jpg" alt="">
                <div class="overlay">
                    <h2>Suscribete</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagens/elquenoesdeku.jpeg" alt="">
                <div class="overlay">
                    <h2>Suscribete</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagens/sukuna.jpeg" alt="">
                <div class="overlay">
                    <h2>Suscribete</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagens/urry.jpg" alt="">
                <div class="overlay">
                    <h2>Suscribete</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagens/mononoke.jpg" alt="">
                <div class="overlay">
                    <h2>Suscribete</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="img/1 (9).jpg" alt="">
                <div class="overlay">
                    <h2>Suscribete</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagens/Ray.jpg" alt="">
                <div class="overlay">
                    <h2>Suscriberte</h2>
                </div>
            </div>
            <!-- <div class="imagen">
                <img src="img/1 (2).jpg" alt="">
            </div> -->
        </div>
    </div>

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
                        |<span>Proyecto ficticio para la Universidad Autónoma de Aguascalientes.</span> | &copy; 2022
                    </span>
                </div>


            </div><!-- /row -->
        </div> <!-- /Container -->
    </footer>
</body>

</html>
>>>>>>> master
