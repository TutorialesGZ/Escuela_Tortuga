<?php
require_once('./Grupos.php');
$id = $_POST['id'];
$obj = new Grupos();

$result = $obj->deleteGrupos($id);
if($result == true){
    echo("Se elmino el registro");
}else{
    echo("No se pudo eliminar");
}
?>
