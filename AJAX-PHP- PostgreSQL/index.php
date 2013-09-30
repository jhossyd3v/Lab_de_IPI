<?php 
	session_start();
?>
<!doctype html>
<html lang='es'>
<head>
	<meta charset='UTF-8'>
	<title>Document</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<section id='a'>
		<h1>Ingresar Datos</h1>
		<p>
			<label>Usuario: </label>
			<input id='nusuario' type='text' placeholder='Ingrese el nombre de usuario'>
			<br>
			<button id='reg'>Registrar</button>
		</p>
		<p>
			<form method='post' action='agregarcomentarios.php'>
				<label>Id Usuario</label>
				<input name='iduser' id='iduser' type='text' placeholder='Id de usuario que va a comentar' required>
				<label id='com'>Comentar: </label>
				<textarea name='comment' id='comment' required></textarea>
				<button>Enviar sin Ajax</button>
			</form>
		</p>
	</section>
	<section id='b'>
		<h1>Buscar Usuario por ID</h1>
		<p>
			<label>Seleccione Usuario: </label>
			<input id='busuario' type='text' placeholder='Nombre de usuario a buscar' onkeyUp='showUsers()'>
		</p>
		<div id='usuarios'>
		</div>
	</section>
	<section id='c'>
		<h1>Buscar comentarios de un usuario por su ID</h1>
		<p>
			<label>Usuario: </label>
			<input id='idusuario' type="text" placeholder='Escriba un ID Usuario' onkeyUp='showComments()'>
		</p>
		<div id='commentInBD'>
		</div>
	</section>
	<script type='text/javascript' src='ajax.js'></script>
</body>
</html>