<?php
	require_once 'conn.php';
	if(ISSET($_POST['insert'])){
		$fullname=$_POST['fullname'];
		$dniNumber=$_POST['dniNumber'];
		$roomNumber=$_POST['roomNumber'];
		$tarifa=$_POST['tarifa'];
		$montoTarifa=$_POST['montoTarifa'];
		$hora=$_POST['hora'];
		$salida="Alquilado";
		$vueltoObserv=$_POST['vueltoObserv'];

		$query="INSERT INTO `historial2` 
		(nombrecompleto, numerodni, numerocuarto, tarifa, montotarifa, ingreso, salida,vueltoObserv) 
		VALUES
		('$fullname', '$dniNumber', '$roomNumber', '$tarifa', '$montoTarifa', '$hora', '$salida','$vueltoObserv')";
		
		$conn->exec($query);
		echo "xcrecercercercerc";
		header("location:index.php");
	}
?>