<html>
<Title> Altas de Articulos </Title>
<Body>
<?php

//Conexion con la base
$cone = mysqli_connect("localhost","root", "");

//seleccion de la base de datos con la que vamos a trabajar mysqli_select_db($cone, "papeleria");

$codigo = $_REQUEST['codigo']; 
$nombre = $_REQUEST['nombre'];
$cantidad = $_REQUEST['cantidad'];
$precio = $_REQUEST['precio'];

mysqli_query($cone, "insert into articulos (codigo, nombre, cantidad, precio) values
('$codigo', '$nombre', '$cantidad', '$precio')");

mysqli_close($cone); 

?>
<h1><div align="center">Registro Insertado</div></h1>
<div align="center"><a href="consultareg.php">Visualizar el contenido de la base</a></div>
</Body>
</Html>