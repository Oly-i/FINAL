<?php
    include("conexion.php");
    $nombre         =$_POST['nombre'];
    $telefono       =$_POST['telefono'];   
    $sucursal       =$_POST['sucursal'];
    $tipo           =$_POST['tipo'];
    $cantidad       =$_POST['cantidad'];   
    $fecha          =$_POST['fecha'];
    $hora           =$_POST['hora'];

    $consulta = "INSERT INTO falconi(nombre, telefono, sucursal, tipo, cantidad, fecha, hora) 
VALUES('$nombre', '$telefono', '$sucursal', '$tipo', '$cantidad', '$fecha', '$hora')";


    if($conexion->query($consulta)===TRUE){
        header("Location: agregar.php");
    }else{
        echo "Error: ".$consulta."<br>".$conexion->error;
    }
    $conexion->close();
?>