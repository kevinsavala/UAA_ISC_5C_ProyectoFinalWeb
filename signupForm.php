<?php 
    session_start();
    function codigoCaptcha($length=5){
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
        $captcha = codigoCaptcha();
?>
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
    <style>
        height: 200px;
        position: relative;
        border: 3px solid green;
        }

        .vertical-center {
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .textoBG {
            background-color: #404040;
            color: white;
        }

        @import url('https://fonts.googleapis.com/css?family=Oswald:400,700');

        svg text {
            font-family: 'Oswald', sans-serif;
            font-weight: 700;
            text-transform: uppercase;
            stroke-width: 3px;
            stroke-linejoin: round;
        }

    </style>
</head>

<body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <?php
        if(isset($_SESSION['logueado']) && $_SESSION['logueado']==1){
            header("Location: index.php");
            exit();
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




    <div class="container" style="margin-top:200px; margin-bottom:230px;">
        <div class="vertical-center">
            <form action="signup.php" method="post" style="color:white">
                <input type="hidden" name="login" value="1">

                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <p class="col-form-label">Sugerencias de nombre: <span id="txtHint"></span></p>
                        <label for="nombre" class="col-form-label">Nombre</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="nombre" class="form-control textoBG" name="name" onkeyup="showHint(this.value)">
                    </div>
                </div>

                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="usuario" class="col-form-label">Usuario</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="usuario" class="form-control textoBG" name="username">
                    </div>
                </div>

                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="mail" class="col-form-label">Correo</label>
                    </div>
                    <div class="col-auto">
                        <input type="email" id="mail" class="form-control textoBG" name="email">
                    </div>
                </div>

                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="contra" class="col-form-label">Contraseña</label>
                    </div>
                    <div class="col-auto">
                        <input name="password" type="password" id="contra" class="form-control textoBG" aria-describedby="passwordHelpInline">
                    </div>
                </div>

                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="ccontra" class="col-form-label">Confirmar contraseña</label>
                    </div>
                    <div class="col-auto">
                        <input name="pwConfirm" type="password" id="ccontra" class="form-control textoBG" aria-describedby="passwordHelpInline">
                    </div>
                </div>

                <div class="elem-group">

                        
                        <svg style="margin-top:20px; margin-bottom:-70px"width="200" height="100" viewBox="0 0 700 200" stroke="#000" stroke-width="3">
                        <defs>
                            <filter id="textFilter">
                                <feTurbulence type="fractalNoise" baseFrequency="0.015" numOctaves="2" result="turbulence" data-filterId="5" />
                                <feDisplacementMap id="distortion" in="SourceGraphic" in2="turbulence" scale="20">
                                    <!-- 								<animate attributeName="scale" values="40; 60; 40" dur="10s" repeatCount="indefinite"></animate> -->
                                </feDisplacementMap>
                            </filter>
                        </defs>
                        <text x="10%" y="40%" font-size="150" fill="#3d56ce" stroke="#8999e5" filter="url(#textFilter)">
                            <?php echo $captcha ;?>
                        </text>
                    </svg>
                    <script>
                        var tl = new TimelineMax({
                            repeat: -1,
                            yoyo: true
                        });

                        tl.to("#distortion", 1, {
                                attr: {
                                    scale: 60
                                },
                                ease: Power2.easeOut
                            })
                            .to("#distortion", 1, {
                                attr: {
                                    scale: 40
                                },
                                ease: Power2.easeOut
                            });

                    </script>    
                        
                        
                        
                             <label for="captcha" style="color:white">Por favor ingresa el texto del Captcha:</label>
                        <input type="text" id="captcha" name="captcha_challenge" style="color:black">
                </div>

                <div class="row g-3 align-items-center">
                    <br><button type="submit" class="btn btn-md btn-custom btn-roxo">Registrarme</button>
                </div>


            </form>
            <script>
                function showHint(str) {
                    if (str.length == 0) {
                        document.getElementById("txtHint").innerHTML = "";
                        return;
                    } else {
                        const xmlhttp = new XMLHttpRequest();
                        xmlhttp.onload = function() {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                        xmlhttp.open("GET", "gethint.php?letter=" + str);
                        xmlhttp.send();
                    }
                }

            </script>
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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>