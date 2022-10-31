<?php
include_once './userSession.php';

$userSession = new UserSession();
$userSession->closeSession();
header("Location:../inicio.html");
?>