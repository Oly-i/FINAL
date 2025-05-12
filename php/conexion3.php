<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion 3</title>
</head>
<body>
    <h3>Lectura de base de datos</h3>
    <h4>Bucle fetch_assoc</h4>
    <?php  
        include("conexion.php");
        $consulta= "SELECT * FROM pedidos";
        $resultado = $conexion->query($consulta);
        $a=0;
        while($row= $resultado->fetch_assoc()){
    ?>

    <tr>
        <td><?php echo ++$a ?></td>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['apellido']; ?></td><br><br>
    </tr>

    <?php
        }
    ?>
</body>
</html>