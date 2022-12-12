<?php
    session_start();
    $password = $_POST['password'];
    $passwordC = $_POST['passwordC'];
    $user = $_SESSION['user'];
    
    if(confirmPassword($password, $passwordC)){
        updatePassword($password,$user);
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['pwConfirmError'] = 1;
        header("Location: newPassword.php");
        exit();
    }
    
    
    
    function confirmPassword($passOne, $passTwo){
        if($passOne == $passTwo){
            return true;
        } else {
            return false;
        }
    }
    
    function updatePassword($newPw,$user){
    $con = new mysqli("localhost","id19993614_admin","CR/#+fJer~?aDEk6","id19993614_482482"); // Conectar a la BD
    $sql = "update usuarios set password=aes_encrypt('$newPw','prueba') where cuenta='$user';";
    $query = $con->query($sql); // Ejecutar la consulta SQL
    $sql = "update usuarios set bloqueada=0 where cuenta='$user';";
    $query = $con->query($sql); // Ejecutar la consulta SQL
    $sql = "update usuarios set changePassword=0 where cuenta='$user';";
    $query = $con->query($sql); // Ejecutar la consulta SQL
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