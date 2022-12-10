<?php 
    session_start();
    function codigoCaptcha(){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cosas de Tatuadores</title>
    <link rel="icon" href="">

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

    </style>
</head>

<body>
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
                <a href="index.html" class="navbar-brand">
                    <span class="img-logo">Cosas de Tatuadores</span>
                </a>
            </div>

            <!-- navbar -->
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Tintas.php">Tintas</a></li>
                    <li><a href="Agujas.php">Agujas</a></li>
                    <li><a href="Maquinas.php">Maquinas</a></li>
                    <li><a href="Preguntas.php">Preguntas Frecuentes</a></li>
                    <li class="divisor" role="separator"></li>

                    <li><a href="tienda/Productos.php">Tienda</a></li>
                    <li><a href="loginForm.php">Inicio de sesion</a></li>
                </ul>
            </div>

        </div><!-- /Container -->
    </nav> <!-- /Nav -->
    <br><br><br><br><br><br><br>

    <div class="container">
        <div class="vertical-center">
            <form action="login.php" method="post" style="color:white">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="usuario" class="col-form-label">Usuario</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="usuario" class="form-control textoBG" aria-describedby="passwordHelpInline">
                    </div>
                </div>



                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="contra" class="col-form-label">Contraseña</label>
                    </div>
                    <div class="col-auto">
                        <input name="contra" type="password" id="contra" class="form-control textoBG" aria-describedby="passwordHelpInline">
                    </div>
                </div>



                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="contraConfirm" class="col-form-label">Confirmar contraseña</label>
                    </div>
                    <div class="col-auto">
                        <input name="contraConfirm" type="password" id="contraConfirm" class="form-control textoBG" aria-describedby="passwordHelpInline">
                    </div>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Recordar usuario y contraseña</label>
                </div>


                <div class="row g-3 align-items-center">
                    <br><button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <div class="elem-group">
                        <label for="captcha">Please Enter the Captcha Text</label>
                        <img src="captcha.php" alt="CAPTCHA" class="captcha-image"><i class="fas fa-redo refresh-captcha"></i>
                        <br>
                        <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
                </div>
            </form>
        </div>
    </div>


    <br><br><br><br><br><br><br>


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
                            <a href="#" class="btn btn-primary">Intagram</a>
                        </li>
                        <li class="item-rede-social">
                            <a href="#" class="btn btn-primary">Facebook</a>
                        </li>
                    </ul>
                    <a href="" style="margin-right:10px" target="">
                        <img src="">
                    </a>

                    <span>
                        <strong style="color: aliceblue"></strong>
                        |<span>---</span> | &copy; 2022
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
