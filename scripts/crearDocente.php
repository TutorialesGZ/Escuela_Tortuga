<?php

include("conexion.php");
include("funcionesDocente.php");

if ($_POST["operacion"] == "Crear") {
    $imagen = '';
    if ($_FILES["imagen_usuario"]["name"] != '') {
        $imagen = subir_imagen();
    }
	$stmt = $conexion->prepare("INSERT INTO docentes(clave, nombre, apellidoP, apellidoM, numeroIn, numeroEx, calle, colonia, municipio, estado, telefono, email, ultimoGradoEstudios, especialidad1, especialidad2, numeroDeCedula, imagen ) VALUES(:clave, :nombre, :apellidoP, :apellidoM, :numeroIn, :numeroEx, :calle, :colonia, :municipio, :estado, :telefono, :email, :ultimoGradoEstudios, :especialidad1, :especialidad2, :numeroDeCedula, :imagen)");

    $resultado = $stmt->execute(
        array(
            ':clave'    => $_POST["clave"],
            ':nombre'    => $_POST["nombre"],
            ':apellidoP'    => $_POST["apellidoP"],
            ':apellidoM'    => $_POST["apellidoM"],
            ':numeroIn'    => $_POST["numeroIn"],
            ':numeroEx'    => $_POST["numeroEx"],
            ':calle'    => $_POST["calle"],
            ':colonia'    => $_POST["colonia"],
            ':municipio'    => $_POST["municipio"],
            ':estado'    => $_POST["estado"],
            ':telefono'    => $_POST["telefono"],
            ':email'    => $_POST["email"],
            ':ultimoGradoEstudios'    => $_POST["ultimoGradoEstudios"],
            ':especialidad1'    => $_POST["especialidad1"],
            ':especialidad2'    => $_POST["especialidad2"],
            ':numeroDeCedula'    => $_POST["numeroDeCedula"],
            ':imagen'    => $imagen
        )
    );

    if (!empty($resultado)) {
        echo 'Registro creado';
    }
}


if ($_POST["operacion"] == "Editar") {
    $imagen = '';
    if ($_FILES["imagen_usuario"]["name"] != '') {
        $imagen = subir_imagen();
    }else{
        $imagen = $_POST["imagen_usuario_oculta"];
    }


    $stmt = $conexion->prepare("UPDATE docentes SET clave=:clave, nombre=:nombre, apellidoP=:apellidoP, apellidoM=:apellidoM, numeroIn=:numeroIn, numeroEx=:numeroEx, calle=:calle, colonia=:colonia, municipio=:municipio, estado=:estado, telefono=:telefono, email=:email, ultimoGradoEstudios=:ultimoGradoEstudios, especialidad1=:especialidad1, especialidad2=:especialidad2, numeroDeCedula=:numeroDeCedula, imagen=:imagen  WHERE clave = :id");

    $resultado = $stmt->execute(
        array(
           ':clave'    => $_POST["clave"],
            ':nombre'    => $_POST["nombre"],
            ':apellidoP'    => $_POST["apellidoP"],
            ':apellidoM'    => $_POST["apellidoM"],
            ':numeroIn'    => $_POST["numeroIn"],
            ':numeroEx'    => $_POST["numeroEx"],
            ':calle'    => $_POST["calle"],
            ':colonia'    => $_POST["colonia"],
            ':municipio'    => $_POST["municipio"],
            ':estado'    => $_POST["estado"],
            ':telefono'    => $_POST["telefono"],
            ':email'    => $_POST["email"],
            ':ultimoGradoEstudios'    => $_POST["ultimoGradoEstudios"],
            ':especialidad1'    => $_POST["especialidad1"],
            ':especialidad2'    => $_POST["especialidad2"],
            ':numeroDeCedula'    => $_POST["numeroDeCedula"],
            ':imagen'    => $imagen,
            ':id'    => $_POST["id_usuario"]
        )
    );

    if (!empty($resultado)) {
        echo 'Registro actualizado';
    }
}