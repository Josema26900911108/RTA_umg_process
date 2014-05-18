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
 

   if ( ! ($descriptor=mysql_connect($servidor,$usuario,$pass,$base_datos)) )
	{
		echo mysql_error();
	}
	mysql_select_db($base_datos,$descriptor);
	$consulta='SELECT * FROM estudiante';
	if (! ($resultado=mysql_query($consulta, $descriptor)) )
	{
		echo mysql_error();
	}	
	mysql_select_db($base_datos,$descriptor);
	$consuta="SELECT *FROM alumno WHERE Carne= values ('{$_GET['carne']}') ";
	 
	 if($_GET['pass']=$consulta.FIELD.Clave)
	  {
	
	
	while ($fila=mysql_fetch_array($resultado, MYSQL_ASSOC))
	{
		echo $fila['Apellido'].', '.$fila['Nombre'].'<br />';
	}	  }
	
        
	
?>
</body>
</html>