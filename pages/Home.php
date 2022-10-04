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
    <title>Home</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <header class="header">
        <div class="logo-header">
            <img src="../img/totuga.png" alt="No se econtro la imagen">
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="http://localhost/EscuelaTortuga/pages/Home.php">Inicio</a></li>
                <li><a href="http://localhost/EscuelaTortuga/pages/listaAlumnos.php">Estduantes</a></li>
                <li><a href="#">Docentes</a></li>
                <li><a href="http://localhost/EscuelaTortuga/pages/listaGrupos.php">Grupos</a></li>
                <li><a href="#">Materias</a></li>
                <li><a href="#">Usuario</a></li>
                <li><a href="../scripts/logout.php">Salir</a></li>
                <li><a href="#"><?php   echo ($ses->getUser());  ?></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <picture>
                <img src="../img/3.png" alt="">
            </picture>
        </section>
        <div class="burbujas">
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
        </div>
    </main>
    <footer>
        <li>David Limón Aguilar</li>
        <li>davidcj@gmail.com</li>
    </footer>
</body>
</html>