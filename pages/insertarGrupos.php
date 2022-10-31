<?php
require_once("../scripts/userSession.php");


$ses = new UserSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Grupos</title>
    <link rel="stylesheet" href="../css/insert.css">
</head>
<body>
  <header>  
    <div class="logo-header">
        <img src="../img/totuga.png" alt="No se econtro la imagen">
    </div>
    <nav class="nav-menu">
       
        <ul>
            <li><a href="http://localhost/EscuelaTortuga/pages/Home.php">Inicio</a></li>
            <li><a href="http://localhost/EscuelaTortuga/pages/insertarGrupos.php">Insertar</a></li>
            <li><a href="http://localhost/EscuelaTortuga/pages/listaGrupos.php">Grupos</a></li>
            <li><a href="../scripts/logout.php">Salir</a></li>
            <li><a href="#"><?php   echo ($ses->getUser());  ?></a></li>
        </ul>
    </nav>
</header>
    
<form action="" method="POST">
    <div class="form">
        <h1>Insertar Grupos</h1>
        <div class="grupo">
            <input type="text" id="clave" required><span class="barra"></span>
            <label for="">Clave</label>
        </div>
        <div class="grupo">
            <input type="text" id="descripcion" required><span class="barra"></span>
            <label for="">Descripción</label>
        </div>
        <div class="grupo">
            <!--<input type="text" id="tutor" required>-->
            <label for="">Tutor</label>
            <select style=" margin-top:10%; border-radius:3px; border: none; outline:none" id="tutor">
                <option value="0">Seleccione:</option>
                   <?php
        
                     require_once('../scripts/listaDocentes.php');

                     foreach($array as $key){
                         echo '<option  value="'.$key['clave'].'">'.$key['nombre'].' '.$key['apellidoP'].' '. $key['apellidoM'].'</option>';
                
                        }
                
                     ?>
            
        
             </select>
            
        </div>

        <button  type="submit" onclick="captura()">Registrar</button>
    </div>
</form>
    <footer class="footer">
        <p class="fotter-data">David Limón Aguilar</p>
        <p class="fotter-data">davidcjaguilar@gmail.com</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="../scripts/recibirGrupos.js"></script>
</body>
</html>