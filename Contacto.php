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

    </style>
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
     
<section class="contacto">
   <main class="px-5 text-light">
            <form class="row g-3" action="contactoSendMail.php" method="post">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label" style="color:white;">Correo Electronico</label>
                    <input type="email" class="form-control textoBG" id="inputEmail4" name="email">
                </div>
                <div class="col-md-6">
                    <label for="inputText44" class="form-label" style="color:white;">Nombre</label>
                    <input type="text" class="form-control textoBG" id="inputText4" name="nombrecorreo">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label" style="color:white;">Razón de contacto</label>
                    <select id="inputState" class="form-select  textoBG" name="razon">
                        <option value="sugerencia">Sugerencia</option>
                        <option value="queja">Queja</option>
                        <option value="pago">Problema Pagos</option>
                        <option value="cuenta">Cuenta/Inicio de seción</option>
                    </select>
                </div>
                
                <div class="col-12">
                    <label for="inputTextArea" class="form-label"style="margin-top:30px;color:white">Informacion adicional</label>
                    <textarea class="form-control form-control-lg textoBG" id="inputTextArea" placeholder="Danos mas detalles para poder atenderte lo mejor posible." name="mensaje"></textarea>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-md btn-custom btn-roxo">Enviar</button>
                </div>
            </form>

        </main>
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
              <a href="#" class="btn btn-primary">Instagram</a>
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