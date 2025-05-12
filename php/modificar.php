<?php
    include("conexion.php");
    $id = $_REQUEST['id'];
    $consulta = "SELECT * FROM falconi WHERE id = '$id'";
    $resultado = $conexion->query($consulta);
    $row = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrador - Modificar registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        @font-face {
            font-family: "titulo";
            src: url("../css/font/Pacifico-Regular.ttf");
        }

        @font-face {
            font-family: 'texto';
            src: url("../css/font/Poppins-Regular.ttf");
        }

        @font-face {
            font-family: 'nav';
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
        input[type="number"],
        input[type="date"],
        input[type="time"] {
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

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: var(--rojo);
            font-weight: bold;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
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

    <h1>Modificar datos</h1>

    <form action="actualizar.php" method="post">
        <h2>Detalles</h2>

        <label for="nombre">Nombre:</label>
        <input name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre']; ?>" type="text" required>

        <label for="telefono">Teléfono:</label>
        <input name="telefono" placeholder="Teléfono..." value="<?php echo $row['telefono']; ?>" type="text" required>

        <label for="sucursal">Sucursal:</label>
        <input name="sucursal" placeholder="Sucursal..." value="<?php echo $row['sucursal']; ?>" type="text" required>

        <label for="tipo">Tipo de pedido:</label>
        <input name="tipo" placeholder="Tipo..." value="<?php echo $row['tipo']; ?>" type="text" required>

        <label for="cantidad">Cantidad de donas:</label>
        <input name="cantidad" placeholder="Cantidad..." value="<?php echo $row['cantidad']; ?>" type="number" required>

        <label for="fecha">Fecha:</label>
        <input name="fecha" placeholder="Fecha..." value="<?php echo $row['fecha']; ?>" type="date" required>

        <label for="hora">Hora:</label>
        <input name="hora" placeholder="Hora..." value="<?php echo $row['hora']; ?>" type="time" required>

        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <input type="submit" value="Actualizar">
    </form>

    <a href="../html/VerPedidos.php">Regresar a registros</a>

</body>
</html>
