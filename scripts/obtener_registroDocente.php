<?php

include("conexion.php");
include("funcionesDocente.php");

if (isset($_POST["id_usuario"])) {
    $salida = array();
    $stmt = $conexion->prepare("SELECT * FROM docentes WHERE clave = '".$_POST["id_usuario"]."' LIMIT 1");
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    foreach($resultado as $fila){
    	 $salida["clave"] = $fila["clave"];
        $salida["nombre"] = $fila["nombre"];
        $salida["apellidoP"] = $fila["apellidoP"];
        $salida["apellidoM"] = $fila["apellidoM"];
        $salida["numeroIn"] = $fila["numeroIn"];
         $salida["numeroEx"] = $fila["numeroEx"];
          $salida["calle"] = $fila["calle"];
           $salida["colonia"] = $fila["colonia"];
            $salida["municipio"] = $fila["municipio"];
             $salida["estado"] = $fila["estado"];
              $salida["telefono"] = $fila["telefono"];
               $salida["email"] = $fila["email"];
                $salida["ultimoGradoEstudios"] = $fila["ultimoGradoEstudios"];
                 $salida["especialidad1"] = $fila["especialidad1"];
                 $salida["especialidad2"] = $fila["especialidad2"];
                  $salida["numeroDeCedula"] = $fila["numeroDeCedula"];
                 
        if ($fila["imagen"] != "") {
            $salida["imagen_usuario"] = '<img src="img/' . $fila["imagen"] . '"  class="img-thumbnail" width="100" height="50" /><input type="hidden" name="imagen_usuario_oculta" value="'.$fila["imagen"].'" />';
        }else{
            $salida["imagen_usuario"] = '<input type="hidden" name="imagen_usuario_oculta" value="" />';
        }
    }

    echo json_encode($salida);
}