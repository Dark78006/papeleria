<html>
<head>
<title>Actualizacion completada. </title>
</head>

<body>

<?php

// Actualizamos en funcion del id que recibimos 
$codigo = $_REQUEST['codigo']; 
$nombre = $_REQUEST['nombre']; 
$cantidad = $_REQUEST['cantidad'];
$precio = $_REQUEST['precio'];

//Conexion con la base
$cone mysqli_connect("localhost","root","");

//selección de la base de datos con la que vamos a trabajar 
mysqli_select_db($cone, "papeleria");
$SSQL="Update articulos Set nombre='$nombre', cantidad='$cantidad', precio='$precio' where codigo='$codigo""; 
mysqli_query($cone, $SSQL); 
mysqli_close($cone);

echo "
  <p>Los datos han sido actualizados con exito.</p>
  <p><a href='javascript: history.go(-1)'>VOLVER ATRÁS</a></p>
  <p><a href='javascript: history.go(-2)'>INICIO</a></p>
  ";
  ?>

<div align="center"><a href="consultareg.php">Visualizar el contenido de la base</a></div>
</body>
</html>
