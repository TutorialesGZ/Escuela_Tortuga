<?php
require_once 'buscarAdmin.php';

$columns = ['matricula','nombre','apellidoP','apellidoM','numeroIn','numeroEx','calle','colonia','municipio','estado','telefono','email','claveGrupo'];

$buscar = $_POST['search'];

if(!empty($buscar)){
    if($buscar == "" || $buscar == "undefined" || $buscar == " "){
        $obj = new IngresarHome();
        $res = $obj->getAlumnos();
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
        $obj = new IngresarHome();
        $ver = $obj->buscarUsuario($where);
        $json = json_encode($ver);
        print_r ($json);
    }
}else{
    $obj = new IngresarHome();
    $res = $obj->getAlumnos();
    $json = json_encode($res);
    print_r($json);
}



?>