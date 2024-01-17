<?php  
 //print_r($_POST);

    if(empty($_POST['oculto'])  || empty($_POST['txtEdificio'] ) || empty($_POST['txtNombre'] ) || empty($_POST['txtApellido'] ) || empty($_POST['txtEmail'] ) || empty($_POST['txtPersona'] )|| empty($_POST['txtIdentificacion'] || empty($_POST['txtPropietario'] ))) {
        header('location: index.php?mensaje=falta');
        exit();
    }
    
    include("../../config/bd.php");
    $edificio = $_POST['txtEdificio'];
    $nombre=$_POST['txtNombre'];
    $apellido=$_POST['txtApellido'];
    $email=$_POST['txtEmail'];
    $tipoPersona=$_POST['txtPersona'];
    $identificacion=$_POST['txtIdentificacion'];
    $tipoPropietario=$_POST['txtPropietario'];
    $clave =$_POST['txtEmail'];
  

    $sentencia = $conexion ->prepare("INSERT INTO propietarios (id_edificio,nombre,apellido,email,num_identificacion,id_tipo_persona,id_tipo_propietario,clave) VALUES(?,?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$edificio,$nombre,$apellido,$email,$identificacion,$tipoPersona,$tipoPropietario,$clave]);
    if ($resultado ===TRUE) {
       header('location: index.php?mensaje=registrado');
    } else {
        header('location: index.php?mensaje=error');
        exit();
    }
    


?>