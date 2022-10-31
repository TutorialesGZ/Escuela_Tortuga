<?php
require_once("./Grupos.php");
$obj = new Grupos();

$columns = ['clave','descripcion','tutor'];

$buscar = $_POST['search'];


if(!empty($buscar)){
    if($buscar == "" || $buscar == "undefined" || $buscar == " "){
       
        $res = $obj->getGrupos();
        $json = json_encode($res);
        print_r($json);
    }else{
        $where = "WHERE (";
        $cont = count($columns);
        for ($i=0; $i < $cont ; $i++) { 
            $where.= $columns[$i] . " LIKE '%". $buscar . "%' OR ";
        }
        $where = substr_replace($where, "", -3);
        $where.= ")";
        $ver = $obj->searchGrupos($where);
        $json = json_encode($ver);
        print_r ($json);
    }
}else{
    $res = $obj->getGrupos();
    $json = json_encode($res);
    print_r($json);
}
?>