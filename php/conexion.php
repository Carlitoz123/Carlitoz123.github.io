<?php
    $server="localhost";
    $user="root";
    $password="";
    $db="RAVINE";

    $conexion= new mysqli($server,$user,$password,$db);

    if($conexion->connect_error){
        die("imposible hacer la conexion, prende el mysql");
    }
?>