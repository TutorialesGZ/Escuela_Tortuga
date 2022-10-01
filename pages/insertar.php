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
    <title>Insertar Alumnos</title>
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
            <li><a href="http://localhost/EscuelaTortuga/pages/insertar.php">Insertar</a></li>
            <li><a href="http://localhost/EscuelaTortuga/pages/listaAlumnos.php">lista de estudiantes</a></li>
            <li><a href="../scripts/logout.php">Salir</a></li>
            <li><a href="#"><?php   echo ($ses->getUser());  ?></a></li>
        </ul>
    </nav>
</header>
    
<form action="" method="POST">
    <div class="form">
        <h1>Insertar alumnos</h1>
        <div class="grupo">
            <input type="text" id="numeroControl" required><span class="barra"></span>
            <label for="">Número de control</label>
        </div>
        <div class="grupo">
            <input type="text" id="nombre" required><span class="barra"></span>
            <label for="">Nombre</label>
        </div>
        <div class="grupo">
            <input type="text" id="aP" required><span class="barra"></span>
            <label for="">Apellido Paterno</label>
        </div>
        <div class="grupo">
            <input type="text" id="aM" required><span class="barra"></span>
            <label for="">Apellido Materno</label>
        </div>
        <div class="grupo">
            <input type="number" id="numIn" required><span class="barra"></span>
            <label for="">Numero interior</label>
        </div>
        <div class="grupo">
            <input type="number" id="numEx" required><span class="barra"></span>
            <label for="">Numero exterior</label>
        </div>
        <div class="grupo">
            <input type="text" id="calle" required><span class="barra"></span>
            <label for="">Calle</label>
        </div>
        <div class="grupo">
            <input type="text" id="colonia" required><span class="barra"></span>
            <label for="">Colonia</label>
        </div>
        <div class="grupo">
            <input type="text" id="municipio" required><span class="barra"></span>
            <label for="">Municipio</label>
        </div>
        <div class="grupo">
            <input type="text" id="estado" required><span class="barra"></span>
            <label for="">Estado</label>
        </div>
        <div class="grupo">
            <input type="text" id="cel" required><span class="barra"></span>
            <label for="">Telefono</label>
        </div>
        <div class="grupo">
            <input type="email" id="correo" required><span class="barra"></span>
            <label for="">Correo</label>
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
    <script type="text/javascript" src="../scripts/recibir.js"></script>
</body>
</html>