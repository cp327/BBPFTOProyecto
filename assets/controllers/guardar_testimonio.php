<?php
$conexion = new mysqli("localhost", "root", "", "bybpro");
if ($conexion->connect_error) die("Error de conexión");

$nombre = $_POST['nombre'];
$cargo = $_POST['cargo'];
$empresa = $_POST['empresa'];
$mensaje = $_POST['mensaje'];
$calificacion = $_POST['calificacion'];

$stmt = $conexion->prepare("INSERT INTO testimonios (nombre, cargo, empresa, mensaje, calificacion) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $nombre, $cargo, $empresa, $mensaje, $calificacion);
$stmt->execute();
$stmt->close();
$conexion->close();

header("Location: ../../index.php"); // o la landing
?>
