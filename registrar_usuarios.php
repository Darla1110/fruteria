<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "encuesta_fruteria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$cliente = $_POST['cliente'];

$sql = "INSERT INTO usuarios (nombre, cliente_frecuente) VALUES ('$nombre', $cliente)";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo usuario registrado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
