<?php 
    if(!isset($_GET['id'])){
        header('location: index.php?mensaje=error');
        exit();
    }

    include("../../config/bd.php");
    $id=$_GET['id'];
    $sentencia = $conexion->prepare("DELETE FROM edificio WHERE id=?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado===TRUE) {
        header('location: inventario.php?mensaje=eliminado');
    } else {
        header('location: inventario.php?mensaje=error');
    } 
    
?>