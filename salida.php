<?php
	require 'conn.php';
		
    // Obtener la hora y fecha actual
    $zona_horaria = new DateTimeZone('America/Lima');
    $fecha_actual = new DateTime('now', $zona_horaria);
    $hora_fecha_actual = $fecha_actual->format('H:i:s d/m/Y');

    if(ISSET($_POST['insert'])){
		$idInput=$_POST['idInput'];

        $consulta = "SELECT `salida` FROM `historial2` WHERE `hist_id` = '$idInput'"; 
        $resultado = $conn->query($consulta);	
        if ($resultado) {
            // Obtener el valor de la celda
            $fila = $resultado->fetchArray();
            $valor_celda = $fila['salida'];
        }

        if($valor_celda=='Alquilado'){
            $conn->exec("UPDATE `historial2` SET `salida` = '$hora_fecha_actual' WHERE `hist_id` = '$idInput'");		
            $conn->exec($query);
        }
        header("location:index.php");

	}
?>