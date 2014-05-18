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
	$sql("SELECT * FROM alumno where Carne=VALUES  ('{$_GET['carne']}') AND WHERE ('{$_GET['carne']}') =Carne"  );
	
	if (! ($resultado=mysql_query($sql, $descriptor)) )
	{
		echo mysql_error();
	}
	
	while ($fila=mysql_fetch_array($resultado, MYSQL_ASSOC))
	{
		echo $fila['Apellido'].', '.$fila['Nombre'].'<br />';
	}
?>
</body>
</html>