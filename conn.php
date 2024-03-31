<?php
	$conn=new SQLite3('db/db_historial.db') or die("¡No se puede abrir la base de datos!");
	$query="CREATE TABLE IF NOT EXISTS `historial2`(
		hist_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 
		nombrecompleto TEXT, 
		numerodni TEXT, 
		numerocuarto TEXT, 
		tarifa TEXT,
		montotarifa TEXT,
		ingreso TEXT,
		salida TEXT,
		vueltoObserv TEXT
	)";
	
	$conn->exec($query);
?>