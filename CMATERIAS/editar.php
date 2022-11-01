<?php include 'template/header.php' ?>

<?php
if (!isset($_GET['codigo'])) {
    header('Location: index.php?mensaje=error');
    exit();
}

include_once 'model/conexion.php';
$codigo = $_GET['codigo'];

$sentencia = $bd->prepare("select * from materias where id = ?;");
$sentencia->execute([$codigo]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">

                    <div class="mb-3">
                        <label class="form-label">Id: </label>
                        <input type="text" class="form-control" name="id" required
                               value="<?php echo $persona->id; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre" required
                               value="<?php echo $persona->nombre; ?>">
                    </div>


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

                                    $grupo = $materiaInfo['grupo'];
                                    echo "<option value='{$grupo}'>" . $grupo . "</option>";

                                }

                                ?>
                            </select>
                        </td>
                    </tr>
                    <br>

                    <?php

                    include_once "model/conexion.php";

                    $sql = $bd->query("select * from materias");
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
                                    echo "<br><option value='{$claveDocente}'>" . $claveDocente . "</option> <br>";

                                }

                                ?>
                            </select>
                        </td>
                    </tr>
                    <br>

                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $persona->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

