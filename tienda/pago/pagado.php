<?php
include_once '../../lib/sesion.php';

$sentenciaExistencia = $base_de_datos->prepare("UPDATE productos SET existencia = existencia - ? WHERE id = ?;");
foreach ($_SESSION["carrito"] as $producto) {
	$sentenciaExistencia->execute([$producto->cantidad, $producto->id]);
}
header("Location: ./Prdouctos.php");
>