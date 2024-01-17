<?php include("../../template/navbar.php"); ?>

<?php



if (!isset($_GET['id'])) {
    header('location: index.php?mensaje=error');
    exit();
}

include("../../config/bd.php");
$id = $_GET['id'];

$sentencia = $conexion->prepare("SELECT * FROM propietarios WHERE id=?;");
$sentencia->execute([$id]);
$propietario = $sentencia->fetch(PDO::FETCH_OBJ);


?>

<div class="container justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card header">
                <h2 class="text-center"> Ingresar datos del Propietario: </h2>
            </div>
            <form action="editarproceso.php" class="p-4" method="POST">
                <div class="mb-3">
                    <label class="form-label">Condominio de Residencia:</label>
                    <select name="txtEdificio" id="txtEdificio" require>
                        <option value="">Seleccionar</option>
                        <?php
                        $sentencia2 = $conexion->query("SELECT * FROM edificio ORDER BY id");
                        $rows = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                        foreach ($rows as $row) {  ?>
                            <option value="<?php print($row->id); ?>"><?php print($row->nombre); ?></option>;

                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" autofocus require value="<?php echo $propietario->nombre; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido:</label>
                    <input type="text" class="form-control" id="txtApellido" name="txtApellido" autofocus require value="<?php echo $propietario->apellido; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Correo electrónico del Propietario:</label>
                    <input type="text" class="form-control" id="txtEmail" name="txtEmail" autofocus require value="<?php echo $propietario->email; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tipo de Persona:</label>
                    <select name="txtPersona" id="txtPersona" name="txtPersona" require>
                        <option value="">Seleccionar</option>
                        <?php
                        $sentencia2 = $conexion->query("SELECT * FROM tipo_persona ORDER BY id");
                        $rows = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                        foreach ($rows as $row) {  ?>
                            <option value="<?php print($row->id); ?>"><?php print($row->nombre); ?></option>;

                        <?php
                        }
                        ?>

                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Número de identificación:</label>
                    <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion" autofocus require value="<?php echo $propietario->num_identificacion; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tipo de Propietario:</label>
                    <select id="txtPropietario" name="txtPropietario" require>
                        <option value="">Seleccionar</option>
                        <?php
                        $sentencia2 = $conexion->query("SELECT * FROM tipo_propietario ORDER BY id");
                        $rows = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                        foreach ($rows as $row) {  ?>
                            <option value="<?php print($row->id); ?>"><?php print($row->nombre); ?></option>;

                        <?php
                        }
                        ?>

                    </select>
                </div>
                <div class="d-grid">
                 <input type="hidden" name="id" value="<?php echo $propietario->id;?>">
                    <input type="submit" class="btn btn-dark" value="Modificar">
                </div>
            </form>
            <div class="container">
                <i class="bi bi-arrow-return-left"><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5" />
                        </svg></a></i>
            </div>

        </div>
    </div>
</div>





<?php include("../../template/footer.php"); ?>