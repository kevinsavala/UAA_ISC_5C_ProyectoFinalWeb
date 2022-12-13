<?php session_start();
	
	$_SESSION['id'] = '';
    $_SESSION['nom'] = '';
    $_SESSION['cat'] = '';
    $_SESSION['descr'] = '';
    $_SESSION['exis'] = '';
    $_SESSION['precio'] = '';
    $_SESSION['img'] = '';
	
	$servidor = 'localhost';
    $cuenta = 'id19993614_admin';
    $password = 'CR/#+fJer~?aDEk6';
    $bd = 'id19993614_482482';
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);   
	
    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

   if(isset($_POST['submit'])){
       $modificar=$_POST['modificar'];
       $_SESSION['modificar2']=$modificar;
       $sql2="SELECT *
        FROM Productos
        WHERE idProd='$modificar'";
       $resultado=$conexion ->query($sql2);
       while($fila=$resultado->fetch_assoc()){
           $_SESSION['id']=$fila['idProd'];
           $_SESSION['nom']=$fila['nombre'];
           $_SESSION['cat']=$fila['categoria'];
           $_SESSION['descr']=$fila['descripcion'];
           $_SESSION['exis'] =$fila['existencia'];
           $_SESSION['precio'] =$fila['precio'];
           $_SESSION['img'] =$fila['imagen'];
       }
   } 
   
    if(isset($_POST['mod'])){
        $uno = $_POST['id2'];
        $dos = $_POST['nombre2'];
        $tres = $_POST['categoria2'];
        $cuatro = $_POST['descripcion2'];
        $cinco = $_POST['existencia2'];
        $seis = $_POST['precio2'];
        $siete = $_POST['imagen2'];
        $modificar1 = $_SESSION['modificar2'];
        
        $ne = "UPDATE Productos SET idProd='$uno', nombre='$dos', categoria='$tres', descripcion='$cuatro', existencia='$cinco', precio='$seis', imagen='$siete' WHERE idProd='$modificar1'";
        $fin=$conexion->query($ne);
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

    <style>
    	#hola>label{
    		width: 5%;
    	}
    </style>
    
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
				<li class="page-item"><a class="page-link" href="Bajas.php">Bajas</a></li>
				<li class="page-item active" aria-current="page">
					<span class="page-link">Modificaciones</span>
				</li>
			</ul>
		</nav>
		
		<table style="padding: 5%; width: 100%;">
			<tr>
				<td>
					<?php        
         			$sql = 'select * from Productos';
         			$resultado = $conexion -> query($sql);         
         			if ($resultado -> num_rows){
         		?>
         		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>  
           			<legend style="width: 50%">SELECCIONE PRODCUCTO</legend>
                	<br>
                	<select   class="custom-select" name='modificar' >
                		<?php
                			while( $fila = $resultado -> fetch_assoc() ){ //recorremos los registros obtenidos de la tabla
                    			echo '<option value="'.$fila["idProd"].'">'.$fila["nombre"].'</option>';
                    		}//fin while   
                		?>
                	</select>
                	<br><br>
                	<button type="submit" value="submit" name="submit">Modificar</button>               
            	</form>
            	<?php
            		}
            	?>
				</td>
				<td>
					<form id="hola" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
            	<ul class="wrapper">
                <li class="form-row">
                <label for="id">ID</label>
                <input type="number" name="id2" id="id" value="<?php echo $_SESSION["id"]; ?>" >
                </li>
                <li class="form-row">
                <label for="nombre">NOMBRE</label>
                <input type="text" id="nombre" name="nombre2" value="<?php echo $_SESSION["nom"]; ?>">
                </li>
                <li class="form-row">
                <label for="categoria">CATEGORIA</label>
                <input type="text" id="categoria" name="categoria2" value="<?php echo $_SESSION["cat"]; ?>">
                </li>
                <li class="form-row">
                <label for="descripcion">DESCRIPCION</label>
                <input type="text" id="descripcion" name="descripcion2" value="<?php echo $_SESSION['descr']; ?>">
                </li>
                <li class="form-row">
                <label for="existencia">EXISTENCIA</label>
                <input type="number" id="existencia" name="existencia2" value="<?php echo $_SESSION['exis']; ?>">
                </li>
                <li class="form-row">
                <label for="precio">PRECIO</label>
                <input type="number" id="precio" name="precio2" value="<?php echo $_SESSION['precio']; ?>">
                </li>
                <li class="form-row">
                <label for="imagen">IMAGEN</label>
                <input type="text" id="imagen" name="imagen2" value="<?php echo $_SESSION['img']; ?>">
                </li>
                <li class="form-row">
                <button type="submit" name="mod">Modificar</button>
                </li>
            	</ul>
            	</form>
				</td>
			</tr>
		</table>
		
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
