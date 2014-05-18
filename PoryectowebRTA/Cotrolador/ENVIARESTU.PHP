<?php 
require_once("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3c.org/TR/xhtml/DTD/xhtml-strict.dtd">
<html>
<head>
	<title>Usuario</title>
</head>
<body>
<?php
	if ( ! ($descriptor=mysql_connect($servidor,$usuario,$pass)) )
	
	{
		echo mysql_error();
	}
	mysql_select_db($base_datos,$descriptor);
	mysql_query("INSERT INTO loguer (Usuario,password)VALUES ('{$_POST['us']}','{$_POST['pass']}')");
	
?>
</body>
</html>