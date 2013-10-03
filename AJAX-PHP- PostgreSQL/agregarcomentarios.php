<?php
session_start();
include_once 'conexion.php';
$instancia= new conexion("localhost","evaipi","user", "pass");
	$comentario=$_POST['comment'];
	$iduser = $_POST["iduser"];
		if ($iduser != null && $comentario != null)
		{
			$cons="insert into comentarios(iduser,comentario) values(".$iduser.",'".$comentario."')";
			$respuesta= $instancia->CUD($cons);
		}else
		{
			echo "Error ingrese un idUsuario o un comentario";
		}
pg_close($instancia->objConexion());	
echo '<meta http-equiv="REFRESH" content="0,url=index.php">';		
?>