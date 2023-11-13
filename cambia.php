<html>

<head>
    <title>Datos a actualizar.</title>

</head>

<body>
    <?php

    //Conexion con la base 
    $cone = mysqli_connect("localhost", "root", "");

    //seleccion de la base de datos con la que vamos a trabajar 
    mysqli_select_db($cone, "papeleria");
    $codigo = $_REQUEST['codigo'];

    $consulta = mysqli_query($cone, "select * from articulos where codigo = $codigo");

    while ($registro = mysqli_fetch_array($consulta)) {

        echo "

    <div align='center'>
    <h1>Modificar un registro</h1>
    <br>
    <FORM METHOD='POST' ACTION='actualiza.php'>
    Codigo<br>
    <INPUT TYPE='TEXT' NAME='codigo' value='" . $registro['codigo'] . "'><br> Nombre<br>
    <INPUT TYPE='TEXT' NAME='nombre' value='" . $registro['nombre'] . "'><br> Cantidad<br>
    <INPUT TYPE='TEXT' NAME='cantidad' value='" . $registro['cantidad'] . "'><br> Precio<br>
    <INPUT TYPE='TEXT' NAME='precio' value='" . $registro['precio'] . "'><br>
    <INPUT TYPE='SUBMIT' value='Actualizar'>
    </FORM>
    ";
    }
    mysqli_close($cone);
    ?>
</body>

</html>