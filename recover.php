<?php
session_start();

$usuario = $_POST["username"];
$mail = getEmail($usuario);
$asunto = "Recuperacion de contraseña.";
$nuevaContra = generatePassword();
$mensaje = 'Nueva contraseña: ' . $nuevaContra;


if ( isset($mail) ) {
	mail($mail, $asunto, $mensaje);
    updatePassword($nuevaContra,$usuario);
    header("Location: index.php");
    exit();
    } else {
    $_SESSION['errorsote'] = $mail;
    header("Location: error.php");
    exit();
} 	

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
    $con = new mysqli("localhost","id19993614_admin","CR/#+fJer~?aDEk6","id19993614_482482"); // Conectar a la BD
    $sql = "update usuarios set password=aes_encrypt('$newPw','prueba') where cuenta='$user';";
    $query = $con->query($sql); // Ejecutar la consulta SQL
    $sql = "update usuarios set bloqueada=0 where cuenta='$user';";
    $query = $con->query($sql); // Ejecutar la consulta SQL
    $sql = "update usuarios set changePassword=1 where cuenta='$user';";
    $query = $con->query($sql); // Ejecutar la consulta SQL
}

function getEmail($user){
    $data = consult("select correo from usuarios where cuenta='$user';");
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
    function consultNoReturn($argumento){
        $con = new mysqli("localhost","id19993614_admin","CR/#+fJer~?aDEk6","id19993614_482482"); // Conectar a la BD
        $sql = $argumento; // Consulta SQL
        $query = $con->query($sql); // Ejecutar la consulta SQL
    }
?>