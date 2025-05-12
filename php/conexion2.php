<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db= "4585646_hospital";

    $conn = new mysqli($servername, $username, $password, $db);

    $sql = "SELECT nombre, apellido FROM pedidos";

    $result = mysqli_query($conn, $sql);
    $contador= 0;

    if($result){
        if(mysqli_num_rows($result) >0){
            while($row=mysqli_fetch_assoc($result)){
                echo ++$contador;
                echo "- Nombre: ".$row["nombre"]. "<br>";
                echo "  Apellidos: ".$row["apellido"]. "<br><br>";
            }
        }
    }
?>