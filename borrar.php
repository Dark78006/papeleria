<html>
<Title> Registro Eliminado</Title>
<Body>
<?php

//Conexion con la base
$cone = mysqli_connect("localhost", "root", "");

//seleccion de la base de datos con la que vamos a trabajar mysqli_select_db($cone, "papeleria");
$codigo = $_REQUEST['codigo'];

mysqli_query($cone, "delete from articulos where codigo = $codigo"); mysqli_close($cone);

?>
<h1><div align="center">Registro Borrado<br> </div></h1>
<div align="center"><a href="consultareg.php">Visualizar el contenido de la base</a></div>

</body>

</Html>