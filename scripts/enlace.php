<?php


//echo('Yaaaaa');
   require_once("buscarAdmin.php");
//echo '<script type="text/javascript">alert("Talvez");</script>';

    $email = $_POST['correo'];
    $password = $_POST['pass'];
    //$array = array($email,$password);
    //print_r($array);
    $obj = new IngresarHome();

   

   //}

   if($email === '' || $password === ''){
        echo ('error');
    }else{
        $result = $obj->getUsuarios($email,$password);

        if($result == true){
            echo('aceptado');
            //header('Location:http://localhost/EscuelaTortuga/pages/Home.html');
        }else{
            echo('denegado');
            }
    
        }

    



?>