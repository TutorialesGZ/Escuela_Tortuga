<?php
require_once 'buscarAdmin.php';
$obj = new IngresarHome();
$res = $obj->getAlumnos();
$json = json_encode($res);

print_r($json);

?>