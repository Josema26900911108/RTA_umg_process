<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3c.org/TR/xhtml/DTD/xhtml-strict.dtd"><html>
<head>
<title>Administrador</title>
<link href="../estilos/nuevoadestilo.css"rel="stylesheet" type="text/css"/>
     </head>
         <body >
         <form method="post" action="ENVIARESTU.php">       <div id="marco">
                 <div id="sombra">
                      <a name="sdf" href=" paghis2.html"alt="sfsdf"title="Historia colegio"><img src="../imagenes/col.jpg"id="central" alt="LOGO COLEGIO"height=110px width=124pxl style="border:0px"/>PAG<a/>
                                 <h1 ><font>ADMINISTRADOR I<font ></h1>
                <div />
<div/>
   
   <DIV ID="fondo3">
   
   
   
  
  <div/>
  <div id="a">
  <DIV ID="header">
  <h2>Usuarios activos<h2/>
  <ul DIV id="navi">

  <div id="fondo">
  
  
  <div/>  
  <?php
// 1) Conexión
if ($conexión = mysql_connect("localhost", "rta", "abc")){

// 2) Preparar la orden SQL
$consulta= "SELECT*FROM loguer";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("prueba");
$datos= mysql_query ($consulta);

// 4) Ir Imprimiendo las filas resultantes 

?>
<TABLE BORDER="1" RULES="cols">
<TR>
     <TD>ID</TD>
     <TD>PASSWORD</TD>
    <TD>USUARIO</TD>
    </TR>
   
    <TR>
<?php


while ($fila =mysql_fetch_array($datos))
{
  ?>

  <TR>
<?php
echo "<p>";
?>
<TD>
<?php
echo $fila ["idLOGUER"];
?>
</TD>
<TD>
<?php
echo $fila["Usuario"];
?>
</TD>
<TD>
<?php
echo $fila ["password"];
?>
</TD>
<?php
echo "</p>";
?>
</TR>

<?php
}

}else{
echo "<p> MySQL no conoce ese usuario y password</p>";
}
?>

<div/>



  <div/>
  
</body>
</form>


</html>