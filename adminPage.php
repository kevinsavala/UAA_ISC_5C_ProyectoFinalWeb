<?php 
    session_start();
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
    <script src="js/chart.min.js"></script>
    <style>
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
                <a href="adminPage.php" class="navbar-brand">
                    <span class="img-logo">Cosas de Tatuadores</span>
                </a>
            </div>
            <!-- navbar -->
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="adminPage.php">Inicio</a></li>
                    <li class="divisor" role="separator"></li>
                    <li>
                        <p style="padding-left:60px;padding-top:15px; color:red;">Bienvenido, administrador <?php echo $_SESSION['nombre'];?>.</p>
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
            header("Location: logout.php");
            exit();
        }
    ?>
    
    <?php 
    if(isset($_POST['table']) && $_POST['table']==0){
        unset($_POST['table']);
    }
    ?>
    
    <?php
    if(isset($_POST["table"]) && $_POST["table"]==1){    
    $data = consult("select existencia,nombre from productos;");
    ?>
    
    <div style="margin-top:120px;background-color: rgba(255,255,255,.9);">
        <center>
        <h3 style="color:black;">Existencias de productos en general</h3>
    </center>
    <canvas id="chart1" style="width:100%;" height="100"></canvas>
    <script>
        var ctx = document.getElementById("chart1");
        var data = {
            labels: [
                <?php foreach($data as $d):?> "<?php echo $d->nombre?>",
                <?php endforeach; ?>
            ],
            datasets: [{
                label: 'Existencias',
                data: [
                    <?php foreach($data as $d):?>
                    <?php echo $d->existencia;?>,
                    <?php endforeach; ?>
                ],
                backgroundColor: "#000000",
                borderColor: "#000000",
                borderWidth: 2
            }]
        };
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };
        var chart1 = new Chart(ctx, {
            type: 'bar',
            /* valores: line, bar*/
            data: data,
            options: options
        });

    </script>
    <form method="POST" action="adminPage.php">
        <input type="hidden" name="table" value=0>
        <input  class="btn btn-md btn-custom btn-roxo" id="botonTabla" type="submit" value="Volver">
    </form> 
    </div>
    
    
    
    <?php    
    } else if(isset($_POST["table"]) && $_POST["table"]==2){
           $data = consult("select categoria, COUNT(*) AS conteo from productos where existencia>0 GROUP BY categoria;");
    ?>
    
    <div style="margin-top:120px;background-color: rgba(255,255,255,.9);">
        <center>
        <h3 style="color:black;">Cantidad de productos por categoria</h3>
    </center>
    <canvas id="chart1" style="width:100%;" height="100"></canvas>
    <script>
        var ctx = document.getElementById("chart1");
        var data = {
            labels: [
                <?php foreach($data as $d):?> "<?php echo $d->categoria?>",
                <?php endforeach; ?>
            ],
            datasets: [{
                label: 'Cantidad',
                data: [
                    <?php foreach($data as $d):?>
                    <?php echo $d->conteo;?>,
                    <?php endforeach; ?>
                ],
                backgroundColor: "#000000",
                borderColor: "#000000",
                borderWidth: 2
            }]
        };
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };
        var chart1 = new Chart(ctx, {
            type: 'bar',
            /* valores: line, bar*/
            data: data,
            options: options
        });

    </script>
    <form method="POST" action="adminPage.php">
        <input type="hidden" name="table" value=0>
        <input  class="btn btn-md btn-custom btn-roxo center" id="botonTabla" type="submit" value="Volver">
    </form>    
    </div>
    
    
    <?php }else if(isset($_POST["table"]) && $_POST["table"]==3){ 
        header("Location: Altas.php");
        exit();
    
    }else{ ?>
    
    <br><br><br><br><br><br><br>
    <div>
        <div style="width:50%;margin:auto;">
            <form method="post" action="adminPage.php">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="table" id="flexRadioDefault1" checked value=1>
                <label class="form-check-label" for="flexRadioDefault1">
                <p style="color:white">Mostrar existencias (todos los productos).</p> 
            </label>
        </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="table" id="flexRadioDefault2" value=2>
                <label class="form-check-label" for="flexRadioDefault2"  style="color:white">
                Mostrar existencias por categoria (conteo).
            </label>
        </div>
        <input  class="btn btn-md btn-custom btn-roxo" id="botonTabla" type="submit" value="Elegir">
    </form>
        </div>
        <a href="Altas.php" class="btn btn-md btn-custom btn-roxo">Abrir menu Altas</a>
    </div>
    
    <?php    
    }
    ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>


<?php
    //FUNCIONES
    function consult($argumento){
        $con = new mysqli("localhost","id19993614_admin","CR/#+fJer~?aDEk6","id19993614_482482"); // Conectar a la BD
        $sql = $argumento; // Consulta SQL
        $query = $con->query($sql); // Ejecutar la consulta SQL
        $data = array(); // Array donde vamos a guardar los datos
        while($r = $query->fetch_object()){ // Recorrer los resultados de Ejecutar la consulta SQL
        $data[]=$r; // Guardar los resultados en la variable $data
}
        return $data;
    }
    function consultNoReturn($argumento){
        $con = new mysqli("localhost","id19993614_admin","CR/#+fJer~?aDEk6","id19993614_482482"); // Conectar a la BD
        $sql = $argumento; // Consulta SQL
        $query = $con->query($sql); // Ejecutar la consulta SQL
    }
?>
