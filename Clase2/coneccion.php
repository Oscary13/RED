<?php
$servername ="localhost";
$database ="personas";
$username = "root";
$password = "";

$coneccion = mysqli_connect($servername, $username, $password, $database);
if (!$coneccion) {
    die("Coneccion falida: " . mysqli_connect_error());
}