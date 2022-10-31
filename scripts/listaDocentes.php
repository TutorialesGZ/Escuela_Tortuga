<?php
require_once('../scripts/Grupos.php');
$obj = new Grupos();


$array = $obj->getDocentes();

/*foreach ($array as $key){
    echo($key['clave'].'   '.$key['nombre']);
}*/
?>