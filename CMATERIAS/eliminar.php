<?php
if(!isset($_POST['codigo'])){
    header('Location: index.php?mensaje=error');
    exit();
}

include 'model/conexion.php';
$codigo = $_POST['codigo'];

$sentencia = $bd->prepare("DELETE FROM materias where id = ?;");
$resultado = $sentencia->execute([$codigo]);

if ($resultado === TRUE) {
    header('Location: index.php?mensaje=eliminado');
} else {
    header('Location: index.php?mensaje=error');
}

?>

