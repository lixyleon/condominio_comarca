<?php

include("../../config/bd.php");
include("../../template/navbar.php");

$sentencia = $conexion->query("SELECT * FROM edificio");
$listaedificio = $sentencia->fetchAll(PDO::FETCH_OBJ);

//print_r($listaproducto);

?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    <h2 class="text-center"> Lista de Condominios </h2>
                </div>
            </div>
            <div class="p-4">
                <div class="table-responsive aling-middle table-bordered d-none d-md-block">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Municipio</th>
                                <th scope="col">Parroquia</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listaedificio as $edificio) {
                            ?>
                                <tr class="">
                                    <td scope="row"><?php echo $edificio->id; ?></td>
                                    <td><?php echo $edificio->nombre; ?></td>
                                    <td>

                                    <?php
                                        $sentencia2 = $conexion->query("SELECT * FROM entidad WHERE id = $edificio->id_estado ");
                                        $rows = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($rows as $row) {
                                            echo ($row->nombre);
                                        }
                                        ?>

                                    </td>
                                    <td>
                                    <?php
                                        $sentencia2 = $conexion->query("SELECT * FROM municipio WHERE id = $edificio->id_municipio ");
                                        $rows = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($rows as $row) {
                                            echo ($row->nombre);
                                        }
                                        ?>
                                    </td>
                                    <td>
                                    <?php
                                        $sentencia2 = $conexion->query("SELECT * FROM parroquia WHERE id = $edificio->id_parroquia ");
                                        $rows = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($rows as $row) {
                                            echo ($row->nombre);
                                        }
                                        ?>
                                    </td>

                                    <td><a class="text-success" href="editar.php?id=<?php echo $edificio->id; ?>"><i class="bi bi-pencil-square">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                                </svg></i></a></td>
                                    <td><a onclick="return confirm('Estás seguro de eliminar?')" class="text-danger" href="eliminar.php?id=<?php echo $edificio->id; ?>"><i class=" bi bi-trash">
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

        <div class="col-md-4">
            <div class="card">
                <div class="card header">
                    <h2 class="text-center"> Ingresar datos: </h2>
                </div>
                <form action="registrar.php" class="p-4" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="txtNombre" autofocus require>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Direccion:</label>
                        <textarea name="txtDireccion" row="2" class="form-control" autofocus require></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Entidad:</label>
                        <select name="txtEntidad" id="txtEntidad" require>
                            <option value="">Seleccionar</option>
                            <?php
                            $sentencia2 = $conexion->query("SELECT * FROM entidad ORDER BY id");
                            $rows = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                            foreach ($rows as $row) {  ?>
                                <option value="<?php print($row->id); ?>"><?php print($row->nombre); ?></option>;

                            <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Municipio:</label>
                        <select name="txtMunicipio" id="txtMunicipio" require>
                            <option value="">Seleccionar</option>
                            <?php
                            $sentencia3 = $conexion->query("SELECT * FROM municipio ORDER BY id_entidad");
                            $rows = $sentencia3->fetchAll(PDO::FETCH_OBJ);
                            foreach ($rows as $row) {  ?>
                                <option value="<?php print($row->id); ?>"><?php print($row->nombre); ?></option>;

                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Parroquia:</label>
                        <select name="txtParroquia" id="txtParroquia" require>
                            <option value="">Seleccionar</option>

                            <?php
                            $sentencia3 = $conexion->query("SELECT * FROM parroquia ORDER BY id_municipio");
                            $rows = $sentencia3->fetchAll(PDO::FETCH_OBJ);
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