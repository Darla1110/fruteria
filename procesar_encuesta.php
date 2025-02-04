<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "encuesta_fruteria";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$usuario_id = 1;  // ID del usuario que realiza la encuesta
$calidad = $_POST['calidad'];
$trato = $_POST['trato'];
$sugerencia = $_POST['sugerencia'];
$transferencia = $_POST['transferencia'];

$sql = "INSERT INTO encuesta (usuario_id, calidad, trato, sugerencia, transferencia_bancaria)
        VALUES ($usuario_id, '$calidad', '$trato', '$sugerencia', $transferencia)";

if ($conn->query($sql) === TRUE) {
    echo "Encuesta enviada correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
