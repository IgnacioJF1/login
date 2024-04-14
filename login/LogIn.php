<?php
// Establecer la conexión a la base de datos (debes completar esto)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recuperar datos del formulario
$email = $_POST['mail'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$password = $_POST['Password'];

// Validar los datos recibidos del formulario (puedes agregar más validaciones según tus necesidades)

if (empty($email) || empty($nombre) || empty($apellido) || empty($password)) {
    die("Error: Todos los campos son obligatorios.");
}


// Insertar datos en la base de datos
$sql = "INSERT INTO login.login1 (Mail, Nombre, Apellido, Password) VALUES ('$email', '$nombre',  '$apellido', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
