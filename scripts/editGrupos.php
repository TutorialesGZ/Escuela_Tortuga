<?php
require_once ("./Grupos.php");
$obj = new Grupos();
$clave = $_POST['matricula'];
$des = $_POST['nombre'];
$tutor = $_POST['tutor'];

$editar = $obj->updateGrupos($clave,$des,$tutor);
if($editar == "true"){
    echo('Se a actualizado');
}else{
    echo('Erro al actualizar');
}
?>