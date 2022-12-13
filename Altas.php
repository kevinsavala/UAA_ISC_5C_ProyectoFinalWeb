<?php 
session_start();
?>

<?php
	$servidor = 'localhost';
    $cuenta = 'id19993614_admin';
    $password = 'CR/#+fJer~?aDEk6';
    $bd = 'id19993614_482482';
	$conexion = new mysqli($servidor,$cuenta,$password,$bd);
	if ($conexion->connect_errno){
		die('Error en la conexion');
	}else{
		if(isset($_POST['submit'])&& !empty($_POST['id'])){
			$id = $_POST['id'];
			$nombre = $_POST['nombre'];
			$categoria = $_POST['categoria'];
			$descripcion = $_POST['descripcion'];
			$existencia = $_POST['existencia'];
			$precio = $_POST['precio'];
			$imagen = basename($_POST['imagen']);
			$sql = "INSERT INTO Productos (id,nombre,categoria,descripcion,existencia,precio,imagen) VALUES ($id,'$nombre','$categoria','$descripcion',$existencia,$precio,'$imagen');";
			
			$conexion->query($sql);
			if($conexion->affected_rows >= 1){
				echo '<script> alert("registro insertado") </script>';
			}
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
                    <li><a href="Acercade.php">Acerca de</a></li>
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
    <?php }?>

    <!-- capa -->
    
	<div id="menuABM" style="padding: 5%; width: 100%">
		<nav aria-label="...">
			<ul class="pagination pagination-sm">
				<li class="page-item active" aria-current="page">
					<span class="page-link">Altas</span>
				</li>
				<li class="page-item"><a class="page-link" href="Bajas.php">Bajas</a></li>
				<li class="page-item"><a class="page-link" href="Modificaciones.php">Modificaciones</a></li>
			</ul>
		</nav>
		
		<div id="altas" style="padding: 2%">
			<legend style="color: white;">Agregar productos a la base de datos</legend>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<label for="id" class="form-label" style="color:white;">Id</label>
				<input type="number" name="id" class="form-control textoBG" id="id">
				
				<label for="nombre" class="form-label" style="color:white;">Nombre</label>
				<input type="text" name="nombre" class="form-control textoBG" id="nombre">
				
				<label for="categoria" class="form-label" style="color:white;">Categoría</label>
				<input type="text" name="categoria" class="form-control textoBG" id="categoria">
				
				<label for="descripcion" class="form-label" style="color:white;">Descripción</label>
				<textarea name="descripcion" class="form-control textoBG" id="descripcion" style="resize: none;"></textarea>
				
				<label for="existencia" class="form-label" style="color:white;">Existencia</label>
				<input type="number" name="existencia" class="form-control textoBG" id="existencia">
				
				<label for="precio" class="form-label" style="color:white;">Precio</label>
				<input type="number" name="precio" class="form-control textoBG" id="precio">
				
				<label for="imagen" class="form-label" style="color:white;">Imagen</label>
				<input type="file" name="imagen" class="form-control" id="imagen" accept="image/*">
				<br>
				<button type="submit" class="btn btn-md btn-custom btn-roxo" name="submit">Enviar</button>
			</form>
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
