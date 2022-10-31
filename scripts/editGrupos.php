<?php
require_once ("./Grupos.php");
$obj = new Grupos();
$clave = $_POST['matricula'];
$des = $_POST['nombre'];

$editar = $obj->updateGrupos($clave,$des);
if($editar == "true"){
    echo('Se a actualizado');
}else{
    echo('Erro al actualizar');
}
?>