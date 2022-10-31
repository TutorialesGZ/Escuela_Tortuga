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
    <title>Alumnos</title>
    <link rel="stylesheet" href="../css/lista.css">
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
    <main>
        <form style="margin-left: 40%;">
            <input type="search" id="search" placeholder="Buscar" class="form-imput__soli">
            <button type="submit"> search</button>
        </form>
    
        <table style="margin-left: 30%;">
            <thead>
                <tr>
                <th><div class="encabezdos">Clave</div></th>
                    <th><div class="encabezdos">Descripción</div></th>
                    <th><div class="encabezdos">Tutor</div></th>
                    <th><div class="encabezdos">Eliminar</div></th>
                </tr>
               </thead>
            <tbody id="tasks">
    
            </tbody>
        </table>
        <form action="" method="POST" class="xd">
            <div class="form">
                <h1>Editar Grupos</h1>
                <div class="grupo">
                    <input class="input" type="text" id="numeroControl" required><span class="barra"></span>
                    <label for="">Clave</label>
                </div>
                <div class="grupo">
                    <input class="input" type="text" id="nombre" required><span class="barra"></span>
                    <label for="">Descripción</label>
                </div>
                <div class="grupo">
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
                
        
                <button class="boton" type="submit" onclick="captura()">Editar</button>
            </div>
        </form>
    </main>
        <footer class="footer">
            <p class="fotter-data">David Limón Aguilar</p>
            <p class="fotter-data">davidcjaguilar@gmail.com</p>
        </footer>

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="../scripts/listaGrupos.js"></script>
</body>
</html>