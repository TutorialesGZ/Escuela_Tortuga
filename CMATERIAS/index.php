<?php include 'template/header.php' ?>

<?php
include_once "model/conexion.php";
$sentencia = $bd->query("select * from materias");
$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($persona);
?>

    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-md-7">
                <!-- inicio alerta -->
                <?php
                if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> Rellena todos los campos.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                ?>


                <?php
                if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Registrado!</strong> Se agregaron los datos.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                ?>



                <?php
                if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> Vuelve a intentar.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                ?>



                <?php
                if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Cambiado!</strong> Los datos fueron actualizados.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                ?>


                <?php
                if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Eliminado!</strong> Los datos fueron borrados.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                ?>

                <!-- fin alerta -->
                <div class="">
                    <div>
                    </div>
                    <div class="" style="align-items: center; background-color: #FFFFFF">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr style="margin-left">

                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Grupo</th>
                                <th scope="col">Docente</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Borrar</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            foreach ($persona as $dato) {
                                ?>

                                <tr>
                                    <td scope="row"><?php echo $dato->id; ?></td>
                                    <td><?php echo $dato->nombre; ?></td>
                                    <td><?php echo $dato->grupo; ?></td>
                                    <td><?php echo $dato->claveDocente; ?></td>
                                    <td><a class="text-success" href="editar.php?codigo=<?php echo $dato->id; ?>"><i
                                                    class="bi bi-pencil-square"></i></a></td>
                                    <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger"
                                           href="eliminar.php?codigo=<?php echo $dato->id; ?>"><i
                                                    class="bi bi-trash"></i></a></td>
                                </tr>

                                <?php
                            }
                            ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class=" col-md-6">
                <br>
                <div class="card">
                    <div class="card-heade">
                        <h4>Ingresar datos: </h4>
                    </div>

                    <form class="p-4" method="POST" action="registrar.php">


                        <div class="mb-3">
                            <label class="form-label">Nombre: </label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
<!--
                        <div class="mb-3">
                            <label class="form-label">Grado: </label>
                            <input type="text" class="form-control" name="grado" required>
                        </div>
                        */
                        -->
                        <?php

                        include_once "model/conexion.php";

                        $sql = $bd->query("SELECT grupo FROM materias");
                        $grupo = $sql->fetchAll();

                        ?>
                        <table>
                            <th>Grupo</th>
                        </table>
                        <tr>
                            <td>
                                <select name="grupo">
                                    <?php

                                    foreach ($grupo as $materiaInfo) {
                                        $id = $materiaInfo['id'];
                                        $grupo = $materiaInfo['grupo'];
                                        echo "<option value='{$grupo}'>" . $grupo. "</option>";

                                    }

                                    ?>
                                </select>
                            </td>
                        </tr>
                        <br>

                        <?php

                        include_once "model/conexion.php";

                        $sql = $bd->query("select claveDocente from materias");
                        $materias = $sql->fetchAll();

                        ?>
                        <table>
                            <th>Docente</th>
                        </table>
                        <tr>
                            <td>
                                <select name="idDocente">
                                    <?php

                                    foreach ($materias as $materiaInfo) {

                                        $id = $materiaInfo['id'];
                                        $claveDocente = $materiaInfo['claveDocente'];
                                        echo "<option value='{$claveDocente}'>" . $claveDocente . "</option>";

                                    }

                                    ?>
                                </select>
                            </td>
                        </tr>
                        <br>


                        <div class="d-grid">
                            <input type="hidden" name="oculto" value="1">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include 'template/footer.php' ?>