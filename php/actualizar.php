<?php
    include("conexion.php"); 
    $id = $_REQUEST['id'];
    $nombre = $_POST['nombre'];  
    $telefono = $_POST['telefono'];  
    $sucursal = $_POST['sucursal'];  
    $tipo = $_POST['tipo'];
    $cantidad = $_POST['cantidad'];  
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    
    $consulta = "UPDATE falconi SET nombre='$nombre', telefono='$telefono', telefono='$telefono', sucursal='$sucursal', tipo='$tipo', cantidad='$cantidad', fecha='$fecha', hora='$hora' WHERE id='$id'";
   
    $resultado = $conexion->query($consulta);

    if ($resultado) {
       
        header("Location: ../html/VerPedidos.php");
        exit(); 
    } else {
      
        echo "No se modificó el registro";
    }

   
    $conexion->close();
?>
