<?php include 'template/header.php' ?>

<?php
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from admin");
    $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-7">
            <!-- inicio alerta -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellena todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agregaron los datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   



            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos fueron actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
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
                <div >
                </div>
                <div  class="" style="align-items: center; margin-left: -300px">
                    <table class="table table-bordered table-striped"style="background-color: #FFFFFF">
                        <thead>
                            <tr style="margin-left" >

                                <th scope="col">Empleado</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">ApellidoP</th>
                                <th scope="col">ApellidoM</th>
                                <th scope="col">nIn</th>
                                <th scope="col">nEx</th>
                                <th scope="col">calle</th>
                                <th scope="col">colonia</th>
                                <th scope="col">Municipio</th>
                                <th scope="col">Estado</th>
                                <th scope="col">telefono</th>
                                <th scope="col">email</th>
                                <th scope="col">cedula</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($persona as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->numEmpleado; ?></td>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->apellidoP; ?></td>
                                <td><?php echo $dato->apellidoM; ?></td>
                                <td><?php echo $dato->numeroIn; ?></td>
                                <td><?php echo $dato->numeroEx; ?></td>
                                <td><?php echo $dato->calle; ?></td>
                                <td><?php echo $dato->colonia; ?></td>
                                <td><?php echo $dato->municipio; ?></td>
                                <td><?php echo $dato->estado; ?></td>
                                <td><?php echo $dato->telefono; ?></td>
                                <td><?php echo $dato->email; ?></td>
                                <td><?php echo $dato->cedulaprofesional; ?></td>
                                <td><a class="text-success" href="editar.php?codigo=<?php echo $dato->numEmpleado; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?codigo=<?php echo $dato->numEmpleado; ?>"><i class="bi bi-trash"></i></a></td>
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
                        <label class="form-label">Num Empleado: </label>
                        <input type="text" class="form-control" name="numEmpleado" autofocus required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ApellidoP: </label>
                        <input type="text" class="form-control" name="apellidoP" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ApellidoM: </label>
                        <input type="text" class="form-control" name="apellidoM"  required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero Interior: </label>
                        <input type="text" class="form-control" name="numeroIn"  required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Numero Exterior: </label>
                        <input type="text" class="form-control" name="numeroEx" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Calle: </label>
                        <input type="text" class="form-control" name="calle" required">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Colonia: </label>
                        <input type="text" class="form-control" name="colonia" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Municipio: </label>
                        <input type="text" class="form-control" name="municipio" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Estado: </label>
                        <input type="text" class="form-control" name="estado" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Teléfono: </label>
                        <input type="tel" class="form-control" name="telefono" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email: </label>
                        <input type="email" class="form-control" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cedula: </label>
                        <input type="text" class="form-control" name="cedulaprofesional" required>
                    </div>

                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-danger" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'template/header.php' ?>