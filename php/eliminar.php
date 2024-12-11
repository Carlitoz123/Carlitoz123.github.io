<?php
include "./conexion.php";

$tabla=$_POST['tabla'];
$col=$_POST['columna'];

$fila=$conexion->query("select * from $tabla where $col=".$_POST['id']);

$conexion->query("delete from $tabla where $col=".$_POST['id']);

?>


<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $tabla = $_POST['tabla'];
    $columna = $_POST['columna'];

    // Validación básica
    if (!ctype_digit($id) || empty($tabla) || empty($columna)) {
        echo "Invalid input";
        exit;
    }

    // Consulta preparada
    $stmt = $conexion->prepare("DELETE FROM $tabla WHERE $columna = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
} else {
    echo "Invalid request";
}
?>