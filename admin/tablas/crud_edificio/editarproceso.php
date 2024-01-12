<?php
//print_r($_POST);

if(!isset($_POST['id'])){
        header('location: index.php?mensaje=error');
}

    
    include("../../config/bd.php");
    $id=$_POST['id'];
    $nombre=$_POST['txtNombre'];
    $direccion=$_POST['txtDireccion'];
    $entidad=$_POST['txtEntidad'];
    $municipio=$_POST['txtMunicipio'];
    $parroquia=$_POST['txtParroquia'];
  

    $sentencia = $conexion ->prepare("UPDATE edificio SET nombre=?, direccion=?, id_estado=?, id_municipio=?,id_parroquia=? WHERE id=?;") ;

    $resultado = $sentencia->execute([$nombre,$direccion,$entidad,$municipio,$parroquia,$id]);

    

    if ($resultado ===TRUE) {
       header('location: index.php?mensaje=modificado');
    } else {
        header('location: index.php?mensaje=error aqui');
        exit();
    }
  
    ?>