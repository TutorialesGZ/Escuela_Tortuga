<?php
require_once './buscarAdmin.php';
$numeroControl = $_POST['numControl'];
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['aP'];
$apellidoMaterno = $_POST['aM'];
$numeroInterior = $_POST['numIn'];
$numeroExterior = $_POST['numEx'];
$calle = $_POST['calle'];
$colonia = $_POST['colonia'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];
$numTelefono = $_POST['cel'];
$email = $_POST['email'];
$obj = new IngresarHome();

$resultado =  $obj->insertAlumnos($numeroControl,$nombre,$apellidoPaterno,$apellidoPaterno,
$numeroInterior,$numeroExterior,$calle,$colonia,$municipio,$estado,$numTelefono,$email);
//$resultado = $obj->insertAlumnos("1940005","Luis Angel","MArin","Coheto",0,65,"Nose","Ocotlan","ocotlan","Tlaxcala","2461715558","luis@gmail.com");

if ($resultado == "true") {
    echo("Se registro Correctamente");
}else{
    echo("No se pudo registar");
}
?>