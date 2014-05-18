<?
include("baseconexion.php");
?>
<html>
 
 
<head>

<title>Prueba de PHP</title>
  <link rel="stylesheet" href="estilo.css">

 <body>

 
   	 
  <form action="control.php" method="post" id="form">

 
    
               <ti1> <center><?php session_start();  echo 'CLARO  ';?></center></ti1>   
 
                 <ti2>
 <center><br>Inicia sesión para acceder </center></ti2>

 	      <h2>

              

               <TX1> <p><input  type="text" name="Usuario" id="Usuario" placeholder="Escriba Su Usuario"/></p></TX1>
        
                  <TX2> <p><input  type="password" name="password" id="password"  placeholder="Escriba Su Clave"/></p></TX2>
        

                      <TX3><p><input type="submit" value="Iniciar Sesion" /></p></TX3>
           <h1>
             <?php
              echo 'Loguer 0.1  ';?>
            </h1>
 
              
  </h2>




</form>

<?php
$db=mysql_connect("localhost","rta","abc");
mysql_close($db);
?> 

<p>
<link rel="stylesheet" type="text/css" href="C:\wamp\www\PoryectowebRTA\Vista\estilo.css" media="screen" /> 
</head>
</body>
</html>