<?php
//print_r($_POST);

include_once 'model/conexion.php';

$nombre = (!empty($_POST['nombre'])) ? $_POST : 'nombre';
$grupo = (!empty($_POST['grupo'])) ? $_POST : 'grupo';
$gp= implode($grupo);
$idDocente = (!empty($_POST['idDocente'])) ? $_POST : 'idDocente';
$idDoc= implode($idDocente);

//id nombre grupo claveDocente

$sentencia = $bd->prepare("INSERT INTO materias(id, nombre, grupo, claveDocente) 
                    VALUES (?,?,?);");
$resultado = $sentencia->execute([$nombre, $gp, $idDoc]);

if ($resultado === TRUE) {
    header('Location: index.php ? mensaje = registrado');
} else {
    header('Location: index.php ? mensaje = error');
    exit();
}

?>