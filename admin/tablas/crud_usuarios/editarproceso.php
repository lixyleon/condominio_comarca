<?php
//print_r($_POST);


if(!isset($_POST['id'])){
    header('location: index.php?mensaje=error');
}


    
    include("../../config/bd.php");
    $id=$_POST['id'];
    $edificio = $_POST['txtEdificio'];
    $nombre=$_POST['txtNombre'];
    $apellido=$_POST['txtApellido'];
    $email=$_POST['txtEmail'];
    $tipoPersona=$_POST['txtPersona'];
    $identificacion=$_POST['txtIdentificacion'];
    $tipoPropietario=$_POST['txtPropietario'];
    $clave =$_POST['txtEmail'];
  
  

    $sentencia = $conexion ->prepare("UPDATE propietarios SET id_edificio=?, nombre=?, apellido=?, email=?,num_identificacion=?, id_tipo_persona=?, id_tipo_propietario=?, clave=? WHERE id=?;") ;

    $resultado = $sentencia->execute([$edificio,$nombre,$apellido,$email,$identificacion,$tipoPersona,$tipoPropietario,$clave,$id]);

    print_r($resultado);


    

    if ($resultado ===TRUE) {
       header('location: index.php?mensaje=modificado');
    } else {
        header('location: index.php?mensaje=error');
        exit();
    }
  
    ?> 