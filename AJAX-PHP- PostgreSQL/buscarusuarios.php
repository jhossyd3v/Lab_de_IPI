<?php

include_once 'conexion.php';
$instancia= new conexion("localhost","evaipi","postgres", "Chris210591");
	$nombre=$_GET["nombre"];
	$cons="Select iduser,nombre FROM usuarios where lower(nombre) like lower('%".$nombre."%')";
	$respuesta= $instancia->Extraer($cons);
	$usuarios = "<ul>";
	while($resultados= pg_fetch_array($respuesta)){
		$usuarios = $usuarios."<li>".$resultados[0].' '.$resultados[1]."</li>";
	}
	$usuarios =$usuarios."</ul>";
	echo $usuarios;
	pg_close($instancia->objConexion());
?>