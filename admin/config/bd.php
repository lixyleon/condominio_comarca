<?php
$host="localhost";
    $bd="admin_condominio";
    $usuario="root";
    $contrasenia="";

    try {
        $conexion= new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
     //   if($conexion){ echo "conectado al sistema";} comprobar conexion
    } catch ( PDOException $ex ) {
        echo $ex->getMessage();
    }
?>