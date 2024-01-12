<?php include("../../template/navbar.php");?>

<?php

    if(!isset($_GET['id'])){
        header('location: index.php?mensaje=error');
        exit();
    } 

    include("../../config/bd.php");
    $id=$_GET['id'];

    $sentencia = $conexion->prepare("SELECT * FROM edificio WHERE id=?;");
    $sentencia ->execute([$id]);
    $edificio = $sentencia->fetch(PDO::FETCH_OBJ);
   

?>
<div class="container justify-content-center">
<div class="col-md-4">
            <div class="card">
                <div class="card header">
                    <h2 class="text-center"> Ingresar datos: </h2>
                </div>
                <form action="editarproceso.php" class="p-4" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="txtNombre" autofocus require  value="<?php echo $edificio->nombre;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Direccion:</label>
                        <input type="text" name="txtDireccion" row="2" class="form-control" autofocus require value="<?php echo $edificio->direccion;?>" ></input>
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
                        <input type="hidden" name="id" value="<?php echo $edificio->id;?>">
                        <input type="submit" class="btn btn-dark" value="Editar">
                    </div>
                </form>
            </div>
        </div>
</div>


<?php include("../../template/footer.php");?>