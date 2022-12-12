<?php
	
	session_start();
	
	$servidor = 'localhost';
    $cuenta = 'id19993614_admin';
    $password = 'CR/#+fJer~?aDEk6';
    $bd = 'id19993614_482482';
	
	$conexion = new mysqli($servidor,$cuenta,$password,$bd);
	
	if ($conexion->connect_errno){
         die('Error en la conexion');
	}
	else {
		require('fpdf184/fpdf.php');
		
		$pdf = new FPDF();
		
		$direccion = 'Ingresar direccion';
		$fecha = date('d/m/y h:i:s');
		$columnas = array('Producto','Cantidad','Precio Total');
		
		$pdf->SetMargins(25,20);
		$pdf->AddPage();	
		$pdf->SetTitle('Ticket');
		$pdf->SetAuthor('Cosas de Tatuajes');
		$pdf->SetCreator('Cosas de Tatuajes');
		$pdf->SetFont('Courier', 'B', 24);
		$pdf->SetTextColor(0,0,0);
		$pdf->Cell(0,8,"        Cosas De Tatuajes");
		$pdf->Ln();
		$pdf->Ln();
		$pdf->SetFont('Courier', 'B', 20);
		$pdf->Cell(0,8,"Direccion: ");
		$pdf->Cell(0,8,utf8_decode($direccion),0,1,'R');
		$pdf->Cell(0,8,"Fecha: ");
		$pdf->Cell(0,8,utf8_decode($fecha),0,1,'R');
		$pdf->Ln();
		$pdf->Ln();
		$pdf->Ln();
		$pdf->Cell(0,8,"Articulos comprados");
		$pdf->Ln();
		$pdf->Ln();
		$pdf->Ln();
		
		//creamos la tabla
		$pdf->SetFont('Courier', 'B', 16);
		foreach($columnas as $col)
		$pdf->Cell(50,8,$col,'B');
		$pdf->Ln();
		
		$productos = $_SESSION['Producto'];
		$cantidad = $_SESSION['Cantidad'];
		
		$i=0;$k=0;
		while( $i < count($productos) ){

			$sql = "SELECT nombre,precio FROM Productos WHERE idProd='$productos[$i]'";
			$resultado = $conexion -> query($sql);
			$fila = $resultado -> fetch_assoc();
			$nombre = $fila['nombre'];
			$precio = $fila['precio'] * $cantidad[$i];
			
			$pdf->Cell(50,8,utf8_decode($nombre));
			$pdf->Cell(50,8,utf8_decode($cantidad[$i]));
			$pdf->Cell(50,8,"$".$precio);
			$k = $k + $precio;
			$pdf->Ln();
			$i++;
			
		}
		
		$pdf->Cell(50,8,"Total a pagar",'T');$pdf->Cell(50,8,"",'T');
		$pdf->Cell(50,8,"$".$k,'T');
		
		$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
		
		$pdf->SetFont('Courier', 'B', 14);
		$pdf->Cell(20);
		$pdf->Cell(40,8,"Si tienes dudas favor de llamar al siguiente numero");$pdf->Ln();
		$pdf->Cell(40);
		$pdf->Cell(20,8,"Tel: 4491234567");
		
		$pdf->Output('I', 'Ticket.pdf');
	}
?>