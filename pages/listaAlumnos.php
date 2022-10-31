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
                <li><a href="http://localhost/EscuelaTortuga/pages/insertar.php">Insertar</a></li>
                <li><a href="http://localhost/EscuelaTortuga/pages/listaAlumnos.php">lista de estudiantes</a></li>
                <li><a href="../scripts/logout.php">Salir</a></li>
                <li><a href="#"><?php   echo ($ses->getUser());  ?></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form >
            <input type="search" id="search" placeholder="Buscar" class="form-imput__soli">
            <button type="submit"> search</button>
        </form>
    
        <table>
            <thead>
                <tr>
                <th><div class="encabezdos">Número de control</div></th>
                    <th><div class="encabezdos">Nombre</div></th>
                    <th><div class="encabezdos">Apellido paterno</div></th>
                    <th><div class="encabezdos">Apellido Materno</div></th>
                    <th><div class="encabezdos">Numero Interior</div></th>
                    <th><div class="encabezdos">Numero exterior</div></th>
                    <th><div class="encabezdos">Calle</div></th>
                    <th><div class="encabezdos">Colonia</div></th>
                    <th><div class="encabezdos">Municipio</div></th>
                    <th><div class="encabezdos">Estado</div></th>
                    <th><div class="encabezdos">Numero de telefono</div></th>
                    <th><div class="encabezdos">E-mail</div></th>
                    <th><div class="encabezdos">Clave Grupo</div></th>
                    <th><div class="encabezdos">Eliminar</div></th>
                </tr>
               </thead>
            <tbody id="tasks">
    
            </tbody>
        </table>
        <form action="" method="POST" class="xd">
            <div class="form">
                <h1>Editar alumnos</h1>
                <div class="grupo">
                    <input class="input" type="text" id="numeroControl" required><span class="barra"></span>
                    <label for="">Número de control</label>
                </div>
                <div class="grupo">
                    <input class="input" type="text" id="nombre" required><span class="barra"></span>
                    <label for="">Nombre</label>
                </div>
                <div class="grupo">
                    <input class="input" type="text" id="aP" required><span class="barra"></span>
                    <label for="">Apellido Paterno</label>
                </div>
                <div class="grupo">
                    <input class="input" type="text" id="aM" required><span class="barra"></span>
                    <label for="">Apellido Materno</label>
                </div>
                <div class="grupo">
                    <input class="input" type="number" id="numIn" required><span class="barra"></span>
                    <label for="">Numero interior</label>
                </div>
                <div class="grupo">
                    <input class="input" type="number" id="numEx" required><span class="barra"></span>
                    <label for="">Numero exterior</label>
                </div>
                <div class="grupo">
                    <input class="input" type="text" id="calle" required><span class="barra"></span>
                    <label for="">Calle</label>
                </div>
                <div class="grupo">
                    <input class="input" type="text" id="colonia" required><span class="barra"></span>
                    <label for="">Colonia</label>
                </div>
                <div class="grupo">
                    <input class="input" type="text" id="municipio" required><span class="barra"></span>
                    <label for="">Municipio</label>
                </div>
                <div class="grupo">
                    <input class="input" type="text" id="estado" required><span class="barra"></span>
                    <label for="">Estado</label>
                </div>
                <div class="grupo">
                    <input class="input" type="text" id="cel" required><span class="barra"></span>
                    <label for="">Telefono</label>
                </div>
                <div class="grupo">
                    <input class="input" type="email" id="correo" required><span class="barra"></span>
                    <label for="">Correo</label>
                </div>
                <div class="grupo">
                <label for="">Grupo</label>
                <select style=" margin-top:10%; border-radius:3px; border: none; outline:none" id="claveGrupo">
                <option value="0">Seleccione:</option>
                   <?php
        
                     require_once('../scripts/listaGrupos.php');

                     foreach($array as $key){
                         echo '<option  value="'.$key['clave'].'">'.$key['descripcion'].'</option>';
                
                        }
                
                     ?>
            
        
             </select>
                </div>
        
                <button class="boton" type="submit" onclick="captura()">Editar</button>
            </div>
    </main>
        <footer class="footer">
            <p class="fotter-data">David Limón Aguilar</p>
            <p class="fotter-data">davidcjaguilar@gmail.com</p>
        </footer>

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="../scripts/lista.js"></script>
</body>
</html>