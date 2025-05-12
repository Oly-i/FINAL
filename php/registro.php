<?php
require_once 'conexion.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $password = $_POST['password'];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $usuario, $email, $passwordHash);

    if ($stmt->execute()) {
        echo "<script>alert('Usuario registrado correctamente.'); window.location.href = '../html/ver-registrar.html';</script>";
    } else {
        echo "<script>alert('Error al registrar usuario: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <style>
        @font-face {
            font-family: "titulo";
            src: url("../css/font/Pacifico-Regular.ttf");
        }
        @font-face {
            font-family: "texto";
            src: url("../css/font/Poppins-Regular.ttf");
        }
        @font-face {
            font-family: "nav";
            src: url("../css/font/Borel-Regular.ttf");
        }

        :root {
            --rojo: #b21115;
            --texto: #5b070f;
        }

        body {
            font-family: "texto";
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
        }

        h1 {
            font-size: 4em;
            color: var(--texto);
            font-family: "titulo";
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 2.2em;
            font-family: "nav";
            color: white;
            padding: 20px;
            text-align: center;
            background-color: var(--rojo);
            margin: 0;
            border-radius: 10px 10px 0 0;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            text-align: left;
            margin: 15px 0 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: var(--rojo);
            color: white;
            padding: 12px 25px;
            font-size: 1.1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #8e0e10;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2.5em;
            }

            h2 {
                font-size: 1.5em;
                padding: 15px;
            }

            form {
                padding: 20px;
            }

            input[type="submit"] {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <h2>Registro de nuevo usuario</h2>
    <form method="POST" action="registro.php">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
