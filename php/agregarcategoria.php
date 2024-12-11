<?php
include "../php/conexion.php";

if (isset($_POST['name'], $_POST['descripcion'])) {
    $name = $_POST['name'];
    $desc = $_POST['descripcion'];

    // Validación básica
    if (empty($name) || empty($desc)) {
        echo "<script>alert('Por favor, complete todos los campos.');</script>";
        exit;
    }

    // Consulta segura con prepared statements
    $stmt = $conexion->prepare("INSERT INTO categoria (nombre, descripcion) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $desc);

    if ($stmt->execute()) {
        echo "<script>alert('Categoría agregada con éxito'); window.location.href = '../BD/categoria.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conexion->close();
} else {
    echo "<script>alert('Datos incompletos.');</script>";
}
?>
