<?php

include("../../config/bd.php");
include("../../template/navbar.php");

$sentencia = $conexion->query("SELECT * FROM propietarios");
$listapropietarios = $sentencia->fetchAll(PDO::FETCH_OBJ);

//print_r($listaproducto);

?>
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <!-- inicio alerta-->
            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error</strong> Debes colocar todos los datos
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php  } ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
            ?>

                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Registrado satisfactoriamente</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error</strong> Vuelve a intentar
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php  }
            ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'modificado') {
            ?>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Registro modificado</strong> satisfactoriamente
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php  }
            ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
            ?>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Registro eliminado</strong> satisfactoriamente
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php  }
            ?>

            <!-- fin alerta-->

            <div class="card d-none d-md-block">
                <div class="card header">
                    <h2 class="text-center"> Lista de Propietarios </h2>
                </div>
            </div>
            <div class="p-4">
                <div class="table-responsive aling-middle table-bordered d-none d-md-block">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Edificio</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">correo electrónico</th>
                                <th scope="col">Tipo de persona</th>
                                <th scope="col">Identificación</th>
                                <th scope="col">Tipo de Propietario</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listapropietarios as $propietarios) {
                            ?>
                                <tr class="">
                                    <td scope="row"><?php echo $propietarios->id; ?></td>
                                    <td>

                                        <?php
                                            $sentencia2 = $conexion->query("SELECT * FROM edificio WHERE id =$propietarios->id_edificio ");
                                            $rows = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                                            foreach ($rows as $row) {
                                                 echo ($row->nombre);
                                              }
                                            ?>
                                    </td>
                                    <td><?php echo $propietarios->nombre; ?></td>
                                    <td><?php echo $propietarios->apellido; ?></td>
                                    <td><?php echo $propietarios->email; ?></td>
                                    <td>

                                        <?php
                                            $sentencia2 = $conexion->query("SELECT * FROM tipo_persona WHERE id =$propietarios->id_tipo_persona ");
                                            $rows = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                                            foreach ($rows as $row) {
                                                 echo ($row->nombre);
                                              }
                                            ?>
                                    </td>
                                    <td><?php echo $propietarios->num_identificacion; ?></td>
                                    <td>

                                    <?php
                                        $sentencia2 = $conexion->query("SELECT * FROM tipo_propietario WHERE id = $propietarios->id_tipo_propietario ");
                                        $rows = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($rows as $row) {
                                            echo ($row->nombre);
                                        }
                                        ?>

                                    </td>
                                    
                                    
                                    <td><a class="text-success" href="editar.php?id=<?php echo $propietarios->id; ?>"><i class="bi bi-pencil-square">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                                </svg></i></a></td>
                                    <td><a onclick="return confirm('Estás seguro de eliminar?')" class="text-danger" href="eliminar.php?id=<?php echo $propietarios->id; ?>"><i class=" bi bi-trash">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                                </svg></i></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card header">
                    <h2 class="text-center"> Ingresar datos del Propietario: </h2>
                </div>
                <form action="registrar.php" class="p-4" method="POST">
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
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido:</label>
                        <input type="text" class="form-control" id="txtApellido" name="txtApellido" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo electrónico del Propietario:</label>
                        <input type="text" class="form-control" id="txtEmail"  name="txtEmail" autofocus require>
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
                        <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipo de Propietario:</label>
                        <select  id="txtPropietario" name="txtPropietario" require>
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
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-dark" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include('../../template/footer.php')
?>