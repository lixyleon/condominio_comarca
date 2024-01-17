<?php 
    if(!isset($_GET['id'])){
        header('location: index.php?mensaje=error');
        exit();
    }

    include("../../config/bd.php");
    $id=$_GET['id'];
    $sentencia = $conexion->prepare("DELETE FROM propietarios WHERE id=?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado===TRUE) {
        header('location: index.php?mensaje=eliminado');
    } else {
        header('location: index.php?mensaje=error');
    } 
    
?>