<?php

    include("conexion.php");
    include("funcionesDocente.php");

    $query = "";
    $salida = array();
    $query = "SELECT * FROM docentes ";

    if (isset($_POST["search"]["value"])) {
       $query .= 'WHERE nombre LIKE "%' . $_POST["search"]["value"] . '%" ';
       $query .= 'OR apellidoP LIKE "%' . $_POST["search"]["value"] . '%" ';
    }

    if (isset($_POST["order"])) {
        $query .= 'ORDER BY' . $_POST['order']['0']['column'] .' '.$_POST["order"][0]['dir'] . ' ';        
    }else{
        $query .= 'ORDER BY clave DESC ';
    }

    if($_POST["length"] != -1){
        $query .= 'LIMIT ' . $_POST["start"] . ','. $_POST["length"];
    }

    $stmt = $conexion->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    $datos = array();
    $filtered_rows = $stmt->rowCount();
    foreach($resultado as $fila){
        $imagen = '';
        if($fila["imagen"] != ''){
            $imagen = '<img src="img/' . $fila["imagen"] . '"  class="img-thumbnail" width="50" height="35" />';
        }else{
            $imagen = '';
        }

        $sub_array = array();
        $sub_array[] = $fila["clave"];
        $sub_array[] = $fila["nombre"];
        $sub_array[] = $fila["apellidoP"];
         $sub_array[] = $fila["apellidoM"];
        $sub_array[] = $fila["numeroIn"];
         $sub_array[] = $fila["numeroEx"];
          $sub_array[] = $fila["calle"];
           $sub_array[] = $fila["colonia"];
            $sub_array[] = $fila["municipio"];
             $sub_array[] = $fila["estado"];
              $sub_array[] = $fila["telefono"];
               $sub_array[] = $fila["email"];
                $sub_array[] = $fila["ultimoGradoEstudios"];
                 $sub_array[] = $fila["especialidad1"];
                  $sub_array[] = $fila["especialidad2"];
                   $sub_array[] = $fila["numeroDeCedula"];
  					$sub_array[] = $imagen;
        $sub_array[] = '<button type="button" name="editar" clave="'.$fila["clave"].'" class="btn btn-warning btn-xs editar">Editar</button>';
        $sub_array[] = '<button type="button" name="borrar" clave="'.$fila["clave"].'" class="btn btn-danger btn-xs borrar">Borrar</button>';
        $datos[] = $sub_array;
    }

    $salida = array(
        "draw"               => intval($_POST["draw"]),
        "recordsTotal"       => $filtered_rows,
        "recordsFiltered"    => obtener_todos_registros(),
        "data"               => $datos
    );

    echo json_encode($salida);