<?php
include "../php/conexion.php";

if (isset($_POST['prov'], $_POST['email'], $_POST['dire'], $_POST['telefono'])) {
    $prov = $_POST['prov'];
    $email = $_POST['email'];
    $dire = $_POST['dire'];
    $telefono = $_POST['telefono'];

    // Validación básica
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Correo no válido";
        exit;
    }

    if (!preg_match("/^\d{10}$/", $telefono)) {
        echo "Teléfono no válido";
        exit;
    }

    // Consulta segura con prepared statements
    $stmt = $conexion->prepare("INSERT INTO proveedor (nombre, email, direccion, telefono) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $prov, $email, $dire, $telefono);

    if ($stmt->execute()) {
        echo "<script>alert('Proveedor agregado con éxito'); window.location.href = '../BD/proveedor.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conexion->close();
} else {
    echo "<script>alert('Datos incompletos');</script>";
}
?>
