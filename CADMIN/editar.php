<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['codigo'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("select * from admin where numEmpleado = ?;");
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
                        <label class="form-label">Num Empleado: </label>
                        <input type="text" class="form-control" name="numEmpleado" required
                               value="<?php echo $persona->numEmpleado; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre" required
                               value="<?php echo $persona->nombre; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ApellidoP: </label>
                        <input type="text" class="form-control" name="apellidoP" required
                        value="<?php echo $persona->apellidoP; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ApellidoM: </label>
                        <input type="text" class="form-control" name="apellidoM" required
                        value="<?php echo $persona->apellidoM; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero Interior: </label>
                        <input type="text" class="form-control" name="numeroIn" required
                        value="<?php echo $persona->numeroIn; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Numero Exterior: </label>
                        <input type="text" class="form-control" name="numeroEx" required
                               value="<?php echo $persona->numeroEx; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Calle: </label>
                        <input type="text" class="form-control" name="calle" required
                               value="<?php echo $persona->calle; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Colonia: </label>
                        <input type="text" class="form-control" name="colonia" required
                               value="<?php echo $persona->colonia; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Municipio: </label>
                        <input type="text" class="form-control" name="municipio" required
                               value="<?php echo $persona->municipio; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Estado: </label>
                        <input type="text" class="form-control" name="estado" required
                               value="<?php echo $persona->estado; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Teléfono: </label>
                        <input type="text" class="form-control" name="telefono" required
                               value="<?php echo $persona->telefono; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email: </label>
                        <input type="text" class="form-control" name="email" required
                               value="<?php echo $persona->email; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cedula: </label>
                        <input type="text" class="form-control" name="cedulaprofesional" required
                               value="<?php echo $persona->cedulaprofesional; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $persona->numEmpleado; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

