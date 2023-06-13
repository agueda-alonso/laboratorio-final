<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <header>LABORATORIO FINAL</header>
    <form action="registro.php" method="POST" id="form" onsubmit="return validarFormulario()">
      <input type="text" id="nombre" name="nombre" placeholder="NOMBRE" required><br>

      <input type="text" id="apellido1" name="apellido1" placeholder="PRIMER APELLIDO" required><br>

      <input type="text" id="apellido2" name="apellido2" placeholder="SEGUNDO APELLIDO" required><br>

      <input type="email" id="email" name="email" placeholder="EMAIL" required><br>

      <input type="text" id="login" name="login" placeholder="LOGIN" required><br>

      <input type="password" id="password" name="password" placeholder="CONTRASEÑA" required><br>

      <input type="submit" id="submit" value="ENVIAR">

    <button onclick="mostrarRegistros()" id="registro">Registro</button>

    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laboratorio";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

// Validar mail
function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];

// Validar datos HTML
if (empty($nombre) || empty($apellido1) || empty($apellido2) || empty($email) || empty($login) || empty($password)) {
    $error = "Por favor, complete todos los campos del formulario.";
    echo "<script>mostrarError('$error');</script>";
    exit;
}

if (!validarEmail($email)) {
    $error = "El correo electrónico ingresado no es válido.";
    echo "<script>mostrarError('$error');</script>";
    exit;
}

if (strlen($password) < 4 || strlen($password) > 8) {
    $error = "La contraseña debe tener entre 4 y 8 caracteres.";
    echo "<script>mostrarError('$error');</script>";
    exit;
}

// Validar datos PHP
$stmt = $conn->prepare("SELECT * FROM clientes WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $error = "El correo electrónico ingresado ya está registrado.";
    echo "<script>mostrarError('$error');</script>";
    exit;
}

// Insertar datos
$stmt = $conn->prepare("INSERT INTO clientes (nombre, apellido1, apellido2, email, login, password)
        VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nombre, $apellido1, $apellido2, $email, $login, $password);

if ($stmt->execute()) {
    $exito = "Registro completado con éxito.";
    echo "<script>mostrarExito('$exito');</script>";
} else {
    $error = "Error al registrar los datos: " . $stmt->error;
    echo "<script>mostrarError('$error');</script>";
}

$stmt->close();
$conn->close();
?>



