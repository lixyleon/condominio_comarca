<?php  
  // print_r($_POST);
 

    if(empty($_POST['oculto']) || empty($_POST['txtNombre'] ) || empty($_POST['txtDireccion'] ) || empty($_POST['txtEntidad'] ) || empty($_POST['txtMunicipio'] )|| empty($_POST['txtParroquia'] )) {
        header('location: index.php?mensaje=falta');
        exit();
    }
    
    include("../../config/bd.php");
    $nombre=$_POST['txtNombre'];
    $direccion=$_POST['txtDireccion'];
    $entidad=$_POST['txtEntidad'];
    $municipio=$_POST['txtMunicipio'];
    $parroquia=$_POST['txtParroquia'];
  

    $sentencia = $conexion ->prepare("INSERT INTO edificio (nombre,direccion,id_estado,id_municipio,id_parroquia) VALUES(?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$direccion,$entidad,$municipio,$parroquia]);
    if ($resultado ===TRUE) {
       header('location: index.php?mensaje=registrado');
    } else {
        header('location: index.php?mensaje=error');
        exit();
    }
    


?>