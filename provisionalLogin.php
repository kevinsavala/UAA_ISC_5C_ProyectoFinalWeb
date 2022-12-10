<?php
session_start();
$_SESSION['logueado'] = "1";
                $_SESSION['user'] = "test";
                $_SESSION['nombre'] = "Test";
                $_SESSION['intentoLog'] = "0";
                $_SESSION['intentos']=0;
                header("Location: index.php");
                exit();
?>