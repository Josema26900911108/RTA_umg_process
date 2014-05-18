<?php 
require_once("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3c.org/TR/xhtml/DTD/xhtml-strict.dtd">
<html>
<head>
	<title>Estudiante</title>
</head>
<body>
<?php
	if ( ! ($descriptor=mysql_connect($servidor,$usuario,$pass)) )
	
	{
		echo mysql_error();
	}
	mysql_select_db($base_datos,$descriptor);
	mysql_query("INSERT INTO alumno (Carne,Nombres,Apellidos,Direccion,Telefono,Clave)VALUES ('{$_POST['carne']}','{$_POST['nom']}','{$_POST['ape']}','{$_POST['dire']}','{$_POST['tel']}','{$_POST['clav']}')");
	
?>
</body>
</html>