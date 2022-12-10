<?php
session_start();

$usuario = $_POST["username"];
$mail = getEmail($usuario);
$asunto = "Recuperacion de contraseña.";
$nuevaContra = generatePassword();
$mensaje = 'Nueva contraseña: ' . $nuevaContra;

if($_POST){
if ( isset($mail) ) {
	mail($mail, $asunto, $mensaje);
    } 	
} 

updatePassword($nuevaContra, $usuario);

header("Location: index.php");
exit();

function generatePassword($length=5){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function updatePassword($newPw,$user){
    $con = new mysqli("localhost","482482","UAAisc5C","482482"); // Conectar a la BD
    $sql = "update usuarios set password=aes_encrypt('$newPw','prueba') where cuenta='$user';";
    $query = $con->query($sql); // Ejecutar la consulta SQL
    $sql = "update usuarios set bloqueada=0 where cuenta='$user';";
    $query = $con->query($sql); // Ejecutar la consulta SQL
}
function getEmail($user){
    $data = consult("select correo from usuarios where cuenta='$user';");
        if(!empty($data)){
            return $data[0][0];
        } else {
            return "error en el nombre";
        }
}
?>