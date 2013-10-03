<?php

	include_once 'conexion.php';

	$instancia= new conexion("localhost","evaipi","user", "pass");
	$nombre=$_GET["nombre"];

	$cons="insert into usuarios(nombre) values('".$nombre."')";
	$respuesta= $instancia->CUD($cons);
	include 'mostrarusuarios.php';
	pg_close($instancia->objConexion());
?>