<?php session_start();

	 $servidor = 'localhost';
    $cuenta = 'id19993614_admin';
    $password = 'CR/#+fJer~?aDEk6';
    $bd = 'id19993614_482482';
    //conexion a la BD
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if($conexion->connect_errno){
        die('Error en la conexion');
    }
    
    if(isset($_POST['submit'])){
            $eliminar=$_POST['eliminar'];
            $sql="DELETE FROM Productos WHERE idProd='$eliminar'";
            $conexion->query($sql);
            if($conexion->affected_rows >= 1){
                echo '<script> alert("registro borrado") </script>';
            }
        }
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
    <?php }?>

    <!-- capa -->
    
	<div id="menuABM" style="padding: 5%; width: 100%">
		<nav aria-label="...">
			<ul class="pagination pagination-sm">
				<li class="page-item"><a class="page-link" href="Altas.php">Altas</a></li>
				<li class="page-item active" aria-current="page">
					<span class="page-link">Bajas</span>
				</li>
				<li class="page-item"><a class="page-link" href="Modificaciones.php">Modificaciones</a></li>
			</ul>
		</nav>

		<div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<legend>Eliminar productos</legend>
				<br>
				<?php
					$sql = 'select * from Productos';
					$resultado = $conexion -> query($sql);
					if ($resultado -> num_rows){
				?>
				<select class="browser-default custom-select" name="eliminar">
					<?php
						while( $fila = $resultado -> fetch_assoc() ){//recorremos los registros obtenidos de la tabla
							echo '<option value="'.$fila["idProd"].'">'.$fila["nombre"].'</option>';
						}
					?>
				</select>
				<br><br>
				
				<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</button>-->
				<button type="submit" value="submit" name="submit">Eliminar</button>
				
				<!--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  					<div class="modal-dialog">
    					<div class="modal-content">
      					<div class="modal-header">
        						<h1 class="modal-title fs-5" id="exampleModalLabel">Confirmar</h1>
        						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      					</div>
      					<div class="modal-body">
      						<h3>Estas seguro que deseas dar de baja el producto?</h3>
      					</div>
      					<div class="modal-footer">
        						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        						<button type="submit" value="submit" name="submit">Eliminar</button>
      					</div>
    					</div>
  					</div>
				</div>-->
				<?php }?>
			</form>
	</div>
	</div>
	
    <!-- Rodape -->
    



</body>

</html>
