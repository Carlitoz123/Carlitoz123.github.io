<?php
$server= "localhost";
$user= "root";
$password="";
$db= "RAVINE";
$CONEXION= new mysq($server,$user,$password,$db);
if($conexion->connect_error){
    die("no tiene prendido el servidor")
}