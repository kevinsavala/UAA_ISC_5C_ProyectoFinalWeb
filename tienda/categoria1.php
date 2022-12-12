<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
<!-- Bootstrap -->
</head>

<body>
    <?php
        include_once('../layout/menuprincipal.php');
        include_once('layout/menu.php');
    ?>

    <main>
        <?php
            $response = json_decode(file_get_contents('https://cosasdetatuaje.000webhostapp.com/tienda/api/productos/api-productos.php?categoria=Maquinas'), true); ?>
        <div class="row"> <?php
            if($response['statuscode'] == 200){
                foreach($response['items'] as $item){
                    
                    include('layout/articulos.php');
                    
                } ?> </div> <?php
            }else{
                $_SESSION['errorsote'] = "ERROR AL CARGAR LOS ITEMS DE LA BASE DE DATOS";
                header("Location: ../error.php");
                exit();
            }
        ?>
    </main>
    <?php
        include_once('../layout/footer.php');
    ?>
    <script src="js/main.js"></script>
</body>
</html>