<html>
<Title> Altas de médicos</Title>
<Body>
<?php

//Conexion con la base
$cone = mysqli_connect("localhost","root", "");

//seleccion de la base de datos con la que vamos a trabajar mysqli_select_db($cone, "papeleria");

$nomed = $_REQUEST['nomed']; 
$nombre = $_REQUEST['nombre'];
$direccion = $_REQUEST['direccion'];
$telefono = $_REQUEST['telefono'];
$correo = $_REQUEST['correo'];
$especialidad = $_REQUEST['especialidad'];

mysqli_query($cone, "insert into articulos (nomed, nombre, direccion, telefono, correo, especialidad) values
('$nomed', '$nombre', '$direccion', '$telefono' '$correo', '$especialidad')");

mysqli_close($cone); 

?>
<h1><div align="center">Registro Insertado</div></h1>
<div align="center"><a href="consultareg.php">Visualizar el contenido de la base</a></div>
</Body>
</Html>
