<?php 
require_once("config.php");
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
if ( ! ($descriptor=mysql_connect($servidor,$usuario,$pass)) )
	
	{
		echo mysql_error();
	}
	mysql_select_db($base_datos,$descriptor);
       $sql=mysql_query("SELECT * FROM alumno where Carne like '%$buscar%' order By Carne");

if ($row = mysql_fetch_array($result)){ 
      echo "<table border = '1'> \n"; 
//Mostramos los nombres de las tablas 
echo "<tr> \n"; 
while ($field = mysql_fetch_field($result)){ 
            echo "<td>$field->name</td> \n"; 
} 
      echo "</tr> \n"; 
do { 
            echo "<tr> \n"; 
            echo "<td>".$row["Caren"]."</td> \n"; 
            echo "<td>".$row["Nombres"]."</td> \n"; 
            echo "<td>".$row["Direccion"]."</td> \n"; 
            echo "<td>".$row["Telefono"]."</td> \n"; 
            echo "</tr> \n"; 
      } while ($row = mysql_fetch_array($result)); 
            echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 

?>
</body>
</html>  