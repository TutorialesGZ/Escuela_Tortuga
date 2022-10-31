<?php
require_once('./Grupos.php');
$id = $_POST['id'];

$obj = new Grupos();
$result = $obj->getGrupo($id);
$json = json_encode($result);
if($result){
    print_r($json);
}else{
    echo("Error");
}

?>