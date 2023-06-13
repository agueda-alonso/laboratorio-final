<?php
echo '<link href="style.css" type="text/css" rel="stylesheet">';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laboratorio";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

$sql = "SELECT email FROM clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<header>CORREOS REGISTRADOS</header>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row['email'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No se encontraron registros.";
}

$conn->close();
?>