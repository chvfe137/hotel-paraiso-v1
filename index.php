<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<script src="listOfFunctions.js"></script>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">Hostal Paraiso</a>
		</div>
	</nav>
	<!--<div class="col-md-3"></div>-->
	<div class="col-md-6 well">
		<h3 class="text-primary">Cuaderno de Registro de Habitaciones</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form method="POST" action="insert.php">
				<div class="form-group" style="width: 22%;">
					<label>Nombre y Apellidos</label>
					<input type="text" class="form-control" name="fullname" required="required"/>
				</div>
				<div class="form-group" style="width: 10%;">
					<label>DNI</label>
					<input type="text" class="form-control" id="dniNumber" name="dniNumber" required="required"/>
				</div>
				<div class="form-group" style="width: 8%;">
					<label>Cuarto</label>
					<input type="text" class="form-control" id="roomNumber" name="roomNumber" required="required" />
				</div>
				<div class="form-group" style="width: 15%;">
					<label>Tarifa</label>
					<select type="text" class="form-control" name="tarifa"  required="required">
						<option value="">Seleccionar tarifa</option>
						<option value="6_horas">Tarifa: 6 horas</option>
						<option value="12_horas">Tarifa: 12 horas</option>
						<option value="24_horas">Tarifa: 24 horas</option>
						<option value="reintegro">Tarifa: Reintegro</option>
        			</select>
				</div>
				<div class="form-group" style="width: 10%;">
					<label>Monto en soles</label>
					<input type="text" class="form-control" id="montoTarifa" name="montoTarifa" required="required" />
				</div>
				<div class="form-group" style="width: 20%;">
					<label>Vuelto y/o Observ.</label>
					<input type="text" class="form-control" id="vueltoObserv" name="vueltoObserv" required="required" />
				</div>
				<div class="form-group" style="width: 17%;">
					<label for="hora">Hora actual:</label>
					<input type="text" class="form-control" id="hora" name="hora" readonly>
				</div>
				<button class="btn btn-primary" name="insert" >Alquilar</button>
			</form>
		</div>
		<div class="form-group" style="width: 30%;">
			<form method="POST" action="salida.php">
				<div class="form-group" style="width: 30%;">
					<label>Salida id:</label>
					<input type="text" class="form-control" name="idInput" required="required"/>
				</div>
				<button class="btn btnsalida" name="insert" >Finalizar</button>
			</form>
		</div>
	</div>
		<script>
		roomCondition();
		dniCondition();
		payCondition();
		// Actualizar la hora cada segundo
		setInterval(actualizarHora, 1000);
		// Actualizar la hora cuando se carga la página
		window.onload = actualizarHora;
		</script>
		<div class="col-md-8" style="width: 100%;">
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr >
						<th style="width: 5%;">N°</th>
						<th>Nombre y Apellidos</th>
						<th style="width: 15%;">DNI</th>
						<th style="width: 5%;">Cuarto</th>
						<th style="width: 10%;">Tarifa</th>
						<th style="width: 80px;">Monto S/.</th>
						<th style="width: 90px;">Ingreso</th>
						<th style="width: 90px;">Salida</th>
						<th style="width: 240px;">Vuelto y/o Observ.</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require'conn.php';
						
						$query=$conn->query("SELECT * FROM `historial2`") or die("Failed to fetch row!");
						while($fetch=$query->fetchArray()){
							echo"<tr>
							<td>".$fetch['hist_id']."</td>
							<td>".$fetch['nombrecompleto']."</td>
							<td>".$fetch['numerodni']."</td>
							<td>".$fetch['numerocuarto']."</td>
							<td>".$fetch['tarifa']."</td>
							<td>".$fetch['montotarifa']."</td>
							<td>".$fetch['ingreso']."</td>
							<td>".$fetch['salida']."</td>
							<td>".$fetch['vueltoObserv']."</td>
							</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>	
</html>