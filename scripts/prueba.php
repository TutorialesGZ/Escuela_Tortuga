<?php
     require_once('buscarAdmin.php');

     $obj = new IngresarHome();
     //$xd = $obj->insertAlumnos("19240001","David","Limon","Aguilar",0,7,"Reforma","Popocatla","Ixtacuixtla","Tlaxcala",2461715558,"davidcjaguilar@gmail.com");
     //$xd = $obj->getAlumnos();
     //,"Limon","Aguilar",0,7,"Reforma","Popocatla","Ixtacuixtla","Tlaxcala",2461715558,"davidcjaguilar@gmail.com"
     //$xd = $obj->updateAlumnos("19240001","Juan","XD","Z",0,10,"Calle nueva","San Gabriel Popocatla","Ixtacuixtla","Tlaxcala",2483457678,"Huan@gmail.com");
     //$xd = $obj->buscarUsuario(19240004);
     $xd = $obj->deleteAlumnos(19240005);
     print_r($xd);

?>