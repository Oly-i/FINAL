<?php
$servername = "fdb1030.awardspace.net";
$username = "4585646_hospital";
$password = "}Pu#uZ;k4UD5L)r}";
$db = "4585646_hospital";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT id, username, email FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Lista de usuarios registrados:</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Usuario: " . $row["username"] . "<br>";
        echo "Email: " . $row["email"] . "<br><hr>";
    }
} else {
    echo "No hay usuarios registrados.";
}

$conn->close();
?>
