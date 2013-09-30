registrar = document.getElementById('reg');
contenedor = document.getElementById('usuarios');
contenedor2 = document.getElementById('commentInBD');
nombre = document.getElementById('nusuario');
nombreB = document.getElementById('busuario');
idUser = document.getElementById('idusuario');

function nuevoAjax()
{
	var xmlhttp=false;
	try
	{
		xmlhttp = new ActivexObject('Msxml2.XMLHTTP');
	} catch(e)
	{
		try
		{
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		} catch(e)
		{
			xmlhttp = false;
		}
	}

	if (!xmlhttp && typeof XMLHttpRequest != 'undefined')
	{
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

//Envío de datos por GET
function regUser()
{
	var nameU = nombre.value;
	ajax=nuevoAjax();
	ajax.open("GET","agregarusuario.php?nombre="+nameU,true);
	ajax.onreadystatechange = function()
	{
		if (ajax.readyState = 4)
		{
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.send(null)
	contenedor.style.textAlign='center'; 
}

function showUsers()
{
	var nameU = nombreB.value;
	ajax=nuevoAjax();
	ajax.open("GET","buscarusuarios.php?nombre="+nameU,true);
	ajax.onreadystatechange = function()
	{
		if (ajax.readyState = 4)
		{
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.send(null)
	contenedor.style.textAlign='center'; 	
}

function showComments()
{
	var id = idUser.value;
	ajax=nuevoAjax();
	ajax.open("GET","mostrarcomentarios.php?idusuario="+id,true);
	ajax.onreadystatechange = function()
	{
		if (ajax.readyState = 4)
		{
			contenedor2.innerHTML = ajax.responseText
		}
	}
	ajax.send(null)
	contenedor2.style.textAlign='center'; 	
}

//Carga de Contenidos
function cargarContenido()
{	
	ajax=nuevoAjax();
	ajax.open("GET","mostrarusuarios.php",true);
	ajax.onreadystatechange = function()
	{
		if (ajax.readyState = 4)
		{
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.send(null)
	contenedor.style.textAlign='center'; 
}

registrar.onclick = function()
{
	regUser();
}

window.onload = function()
{
	cargarContenido();
}