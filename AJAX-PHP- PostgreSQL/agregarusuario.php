<?php

	include_once 'conexion.php';

	$instancia= new conexion("localhost","evaipi","postgres", "Chris210591");
	$nombre=$_GET["nombre"];

	$cons="insert into usuarios(nombre) values('".$nombre."')";
	$respuesta= $instancia->CUD($cons);
	include 'mostrarusuarios.php';
	pg_close($instancia->objConexion());
?>