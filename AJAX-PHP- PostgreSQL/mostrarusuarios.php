<?php
include_once 'conexion.php';
$instancia= new conexion("localhost","evaipi","postgres", "Chris210591");
	$cons='Select iduser,nombre FROM "usuarios";';
	$usuario='';
	$respuesta= $instancia->Extraer($cons);
	$rows = pg_numrows($respuesta);
	for($cont=0;$cont<$rows;$cont++)
	{
		$usuario = $usuario.pg_fetch_result($respuesta,$cont,0)." ".pg_fetch_result($respuesta,$cont,1)."<br>";	
	}
	echo $usuario;
	pg_close($instancia->objConexion());
?>