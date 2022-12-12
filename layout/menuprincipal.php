<?php
session_start();
?>

<?php
        if(isset($_SESSION['logueado']) && $_SESSION['logueado']==1){
            ?>
  <nav class=" navbar-inverse navbar-transparente">
    <div class="container">

      <!-- header -->
      <div class="">

      
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>

        </button>

        <!-- logo-barra -->
        <a href="../index.php" class="navbar-brand">
          <span class="img-logo">Cosas de Tatuadores</span>
        </a>
      </div>

      <!-- navbar -->
      <div class="" id="menu">
        <ul class=" ">
          <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../Acercade.php">Acerca de</a></li>
                    <li><a href="../contacto.php">Contacto</a></li>
                    <li><a href="../Preguntas.php">Preguntas Frecuentes</a></li>
                    <li><a href="../tienda/Productos.php">Tienda</a></li>
                    <li style="color:white; font-weight:bold">  |  </li>
                    <li><p style="padding-left:60px;padding-top:15px; color:white;">Bienvenido, <?php echo $_SESSION['nombre'];?>.</p></li>
                    <li><a href="../logout.php">Cerrar sesión</a></li>
        </ul>
      </div>
    </div><!-- /Container -->
  </nav> <!-- /Nav -->          
            
<?php
        } else { 
    ?>
    
    <nav class=" navbar-inverse navbar-transparente">
    <div class="container">

      <!-- header -->
      <div class="">

      
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>

        </button>

        <!-- logo-barra -->
        <a href="../index.php" class="navbar-brand">
          <span class="img-logo">Cosas de Tatuadores</span>
        </a>
      </div>

      <!-- navbar -->
      <div class="" id="menu">
        <ul class=" ">
          <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../Acercade.php">Acerca de</a></li>
                    <li><a href="../contacto.php">Contacto</a></li>
                    <li><a href="../Preguntas.php">Preguntas Frecuentes</a></li>
                    <li><a href="../tienda/Productos.php">Tienda</a></li>
                    <li style="color:white; font-weight:bold">  |  </li>
                    <li><a href="../loginForm.php">Iniciar sesión</a></li>
                    <li><a href="../signupForm.php">Registrarme</a></li>
        </ul>
      </div>
    </div><!-- /Container -->
  </nav> <!-- /Nav -->
<?php }?>



