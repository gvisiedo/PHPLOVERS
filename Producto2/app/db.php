<?php

// Conexión
$server = 'localhost';
$username = 'root';
$password = '';
$database = '';
//$port = '3306';
$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'"); // Para que se visualicen correctamente los caracteres especiales

// Iniciar la sesión
if (!isset($_SESSION)) {
    session_start();
}