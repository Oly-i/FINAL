<?php
    include("conexion.php");
    $id =$_REQUEST['id'];
    $consulta ="DELETE FROM falconi WHERE id='$id' ";
    $resultado = $conexion->query($consulta);

    if($resultado){
        header("Location: ../html/VerPedidos.php");
        "ALTER TABLE falconi AUTO_INCREMENT = 1";
    }else{
        echo "Error: " .$consulta. "<br>" .$conexion->error; 
    }


?>