<?php
session_start();

$mail = $_POST['email'];
$asunto = "Suscripcion a Cosas de Tatuaje.";
$numeroCupon = generateNumber();
$mensaje = $nombreSender . "Gracias por suscribirte al tablón de Cosas de Tatuaje! Tu cupón es: CUPONSUSCRIPTOR" . $numeroCupon;


if ( isset($mail) ) {
	mail($mail, $asunto, $mensaje);
    header("Location: index.php");
    exit();
    } else {
    $_SESSION['errorsote'] = "Error al enviar correo. Email= " . $mail;
    header("Location: error.php");
    exit();
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