<?php
    print_r($_POST);

    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';

$numEmpleado = $_POST["numEmpleado"];
$nombre = $_POST["nombre"];
$apellidoP = $_POST["apellidoP"];
$apellidoM = $_POST["apellidoM"];
$numeroIn = $_POST["numeroIn"];
$numeroEx = $_POST["numeroEx"];
$calle = $_POST["calle"];
$colonia = $_POST["colonia"];
$municipio = $_POST["municipio"];
$estado = $_POST["estado"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$cedulaprofesional = $_POST["cedulaprofesional"];

    $sentencia = $bd->prepare("UPDATE admin SET nombre = ?, apellidoP = ?, apellidoM = ?, numeroIn = ?,
                    numeroEx = ?, calle = ?, colonia = ?, municipio = ?, estado = ?, telefono = ?,email = ?,
                 cedulaprofesional = ? where numEmpleado = ?;");
    $resultado = $sentencia->execute([$nombre, $apellidoP, $apellidoM, $numeroIn, $numeroEx,
        $calle, $colonia, $municipio, $estado, $telefono, $email, $cedulaprofesional, $numEmpleado]);
    print_r($resultado);
    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }

?>