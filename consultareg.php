<html>

<head>
    <TITLE>Muestra los resultados de una consulta MySQL.</TITLE>
</head>

<body>
    <div align='center'>
        <table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'>
            <tr>
                <td width='50' style='font-weight: bold' align='center'>CODIGO</td>
                <td width='250' style='font-weight: bold' align='center'>NOMBRE</td>
                <td width='150' style='font-weight: bold' align='center'>CANTIDAD</td>
                <td width='150' style='font-weight: bold' align='center'>PRECIO</td>
            </tr>
            <?php
            //Conexion con la base
            $cone = mysqli_connect("localhost", "root", "");
            if (!$cone)
            {
                echo "No se ha podido conectar con el servidor"  . mysqli_error($cone);
            }
            else
            {
                echo "Hemos conectado al servidor <br>";
            }
            //seleccion de la base de datos con la que vamos a trabajar 
            $db= mysqli_select_db ($cone, "papeleria");
            $consulta = "select * from articulos"; 
            $result = mysqli_query($cone, $consulta);

            while ($registro = mysqli_fetch_array($result)) {
                echo "
                <tr>

                <td width='50'align='center'>".$registro ['codigo']."</td>
                <td width='250'>".$registro ['nombre']."</td>
                <td width='150'align='center'>".$registro ['cantidad']."</td>
                <td width='150' align='center'>".$registro ['precio']."</td>
                </tr>
                ";
            }
            mysqli_close($cone);
            ?>

            <h1><div align="center">Listado de Articulos</div></h1>
            <div align="center"><a href="consultareg.php">Visualizar el contenido de la base</a></div>
        </Body>
    </Html>