<?php
include_once 'conexion.php';
$instancia= new conexion("localhost","evaipi","postgres", "Chris210591");
	$iduser = $_GET['idusuario'];
	if($iduser!=null)
	{
	$cons="Select comentario FROM comentarios where iduser = ".$iduser."";
	$respuesta= $instancia->Extraer($cons);
	$cont = 0;
	$usuarios = "<ul>";
	while($resultados= pg_fetch_array($respuesta)){
		$cont+=1;
		$usuarios = $usuarios."<li>".$cont."=>".$resultados[0]."</li>";
	}
	$usuarios =$usuarios."</ul>";
	echo $usuarios;
	}
	pg_close($instancia->objConexion());
?>