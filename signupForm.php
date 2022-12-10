<?php
session_start();
$_SESSION['nombre'] = "Kevin Savala";
$_SESSION['logueado'] = 1;
header("Location:index.php");
exit();
?>