<?php
require_once 'conexion.php';


if ($conexion === null) {
    die("La conexión a la base de datos ha fallado.");
} else {

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario    = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $email      = mysqli_real_escape_string($conexion, $_POST['email']);
    $password   = $_POST['password'];

    $sql = "SELECT password FROM usuarios WHERE username = ? AND email = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ss", $usuario, $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($hash);
        $stmt->fetch();

        if (password_verify($password, $hash)) {
            
            header("Location: ../html/ver-registrar.html");
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario o correo no encontrados.";
    }

    $stmt->close();
}

$conexion->close();
?>
