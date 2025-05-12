<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
            
        <style>
        @font-face {font-family: "titulo";src: url("../css/font/Pacifico-Regular.ttf");}
        @font-face {font-family: 'texto';src: url(../css/font/Poppins-Regular.ttf);}
   		@font-face {font-family: 'nav';src: url(../css/font/Borel-Regular.ttf);}
        h1 {font-size: 6.5em;color: #5b070f;font-family: "titulo";}
        h2 {font-size: 4em; font-family: "nav";}
        body {font-family: "texto";}
    	</style>
            
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/verPedidos.css">
        <title>Administrador- Ver registros</title>
    </head>
    <body>
        <center>
            <h1>Registros</h1>
            <table>
                <thead>
                    <tr>
                        <th>Número de pedido</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Sucursal</th>
                        <th>Tipo de pedido</th>
                        <th>Cantidad de donas</th>
                        <th>Fecha de entrega</th>
                        <th>Hora de entrega</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php
                        include("../php/conexion.php");
                        $consulta = "SELECT * FROM falconi";
                        $resultado = $conexion->query($consulta);
                        while($row=$resultado->fetch_assoc()){
                    ?>
                    <tr>
                        <td data-label="Número de pedido"><?php echo $row['id'];?></td>
                        <td data-label="Nombre"><?php echo $row['nombre'];?></td>
                        <td data-label="Teléfono"><?php echo $row['telefono'];?></td>
                        <td data-label="Sucursal"><?php echo $row['sucursal'];?></td>
                        <td data-label="Tipo de pedido"><?php echo $row['tipo'];?></td>
                        <td data-label="Cantidad de donas"><?php echo $row['cantidad'];?></td>
                        <td data-label="Fecha de entrega"><?php echo $row['fecha'];?></td>
                        <td data-label="Fecha de entrega"><?php echo $row['hora'];?></td>
                        
                        <td><a href="../php/modificar.php?id=<?php echo$row['id'];?>"><img src="../img/cam.png" height="35px"></a></td>

                        <td><a href="../php/eliminar.php?id=<?php echo$row['id'];?>"><img src="../img/borr.png" height="35px"></a></td>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
            </table><br>
            <a href="../php/agregar.php">Agregar registro</a>
            
            <footer>
                <a href="../index.html">Regresar al sitio web</a>
                <p><p>Falconi Donas. &copy;Olinav 2025</p></p>
            </footer>
        </center>
    </body>
</html>