<?php
//print_r($_POST);

include_once 'model/conexion.php';
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


$sentencia = $bd->prepare("INSERT INTO admin(numEmpleado, nombre, apellidoP, apellidoM, numeroIn,
                    numeroEx, calle, colonia, municipio, estado, telefono,email,cedulaprofesional) 
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?);");
$resultado = $sentencia->execute([$numEmpleado, $nombre, $apellidoP, $apellidoM, $numeroIn,
    $numeroEx, $calle, $colonia, $municipio, $estado, $telefono, $email,$cedulaprofesional]);

if ($resultado === TRUE) {
    header('Location: index.php ? mensaje = registrado');
} else {
    header('Location: index.php ? mensaje = error');
    exit();
}

?>