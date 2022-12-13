<?php
session_start();
// email nombrecorreo razon mensaje

$mailSender = $_POST['email'];
$razon = $_POST['razon'];
$nombreSender = $_POST['nombrecorreo'];
$mensaje = $_POST['mensaje'];

$mail = getEmail();
$asunto = $nombreSender . " tiene una duda sobre: " . $razon;
$mensaje = $nombreSender . " | " . $mailSender . " | ha enviado un mensaje: " . $mensaje;

$numCupon = generateNumber();
$asuntoSender = "Hemos recibido tu mensaje | Cosas de Tatuaje.";
$mensajeSender = "Gracias por comunicarte con nosotros! Te responderemos en breve. Por ahora disfruta este cupón en cualquiera de tus compras!: CUPONCONTACTO" . $numCupon;

if ( isset($mail) && isset($mailSender)) {
	mail($mail, $asunto, $mensaje);
	mail($mailSender, $asuntoSender, $mensajeSender);
    header("Location: index.php");
    exit();
    } else {
    $_SESSION['errorsote'] = $mail;
    header("Location: error.php");
    exit();
}


function getEmail(){
    $data = consult("select correo from usuarios where admin=1;");
        if(!empty($data)){
            return $data[0][0];
        } else {
            $_SESSION['errorsote'] = "no se obtuvo el email";
            header("Location: error.php");
            exit();
        }
}

function consult($argumento){
        $con = new mysqli("localhost","id19993614_admin","CR/#+fJer~?aDEk6","id19993614_482482"); // Conectar a la BD
        $sql = $argumento; // Consulta SQL
        $query = $con->query($sql); // Ejecutar la consulta SQL
        $data = array(); // Array donde vamos a guardar los datos
        while($r = mysqli_fetch_row($query)){ // Recorrer los resultados de Ejecutar la consulta SQL
            $data[]=$r; // Guardar los resultados en la variable $data
        }
        return $data;
    }

function generateNumber($length=4){
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>