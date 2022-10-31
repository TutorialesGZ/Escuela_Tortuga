<?php
require_once 'buscarAdmin.php';
$id = $_POST['id'];

$obj = new IngresarHome();
$result = $obj->getAlumnosId($id);
$json = json_encode($result);
if($result){
    print_r($json);
}else{
    echo("Error");
}

?>