<?php
require_once 'buscarAdmin.php';
$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['aP'];
$apellidoMaterno = $_POST['aM'];
$numeroInterior = $_POST['numIn'];
$numeroExterior = $_POST['numEx'];
$calle = $_POST['calle'];
$colonia = $_POST['colonia'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$obj = new IngresarHome();

$result = $obj->updateAlumnos($matricula,$nombre,$apellidoPaterno,$apellidoMaterno,
$numeroInterior,$numeroExterior,$calle,$colonia,$municipio,$estado,$telefono,$email);

if($result == "true"){
    echo('Se a actualizado');
}else{
    echo('Erro al actualizar');
}
?>