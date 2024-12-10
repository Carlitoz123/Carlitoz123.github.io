<?php
include "./conexion.php";

$tabla=$_POST['tabla'];
$col=$_POST['columna'];

$fila=$conexion->query("select * from $tabla where $col=".$_POST['id']);

$conexion->query("delete from $tabla where $col=".$_POST['id']);

?>