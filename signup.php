<?php
    session_start();
    
    //Se tienen name, email, username, password, pwConfirm
    if(confirmData($_POST['name'],$_POST['email'],$_POST['username'],$_POST['password'],$_POST['pwConfirm'])  && checkCaptcha($_SESSION['currentCaptcha'],$_POST['captcha_challenge'])){
        //INSERT A LA DB
        insert($_POST['name'],$_POST['email'],$_POST['username'],$_POST['password']);
        header("Location: index.php");
        exit();
    } else if(!confirmPassword($_POST['password'],$_POST['pwConfirm'])){
        $_SESSION['errorSignup'] = "Error en las contraseñas.";
    } else {
        $_SESSION['errorSignup'] = "Error.";
    }
    
    header("Location: signupForm.php");
    exit();
    
    function insert($nombre,$email,$user,$pass){
    $con = new mysqli("localhost","id19993614_admin","CR/#+fJer~?aDEk6","id19993614_482482"); // Conectar a la BD
    $sql = "insert into usuarios values (DEFAULT, '$nombre','$email','$user', aes_encrypt('$pass','prueba'),0,0,0);"; // Consulta SQL
    $query = $con->query($sql); // Ejecutar la consulta SQL
    }

    function confirmPassword($passOne, $passTwo){
        if($passOne == $passTwo){
            return true;
        } else {
            return false;
        }
    }
    function confirmData($name, $email, $username, $password, $pwConfirm){
        if(isset($name) && isset($email) && isset($username) && isset($password) && isset($pwConfirm)){            
            if(confirmPassword($password, $pwConfirm)){
                return true;
            }
        }
        return false;
    }

function checkCaptcha($cActual, $cIngresado){
    if($cActual == $cIngresado){
        return true;
    } else {
        return false;
    }
}
?>