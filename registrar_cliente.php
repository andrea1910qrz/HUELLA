<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT); // 🔒 encriptar

$sql = "INSERT INTO clientes (nombre, telefono, direccion, correo, contrasena)
        VALUES ('$nombre', '$telefono', '$direccion', '$correo', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
