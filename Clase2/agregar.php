<?php
require ("coneccion.php");
$nombre= "";
$edad = "";



if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
}
if (isset($_POST["edad"])) {
    $edad = $_POST["edad"];
}

echo "Tu nombre es: $nombre y tu edad es: $edad";
echo "<br><br><br>";

$sql = "INSERT INTO personas (id,nombre,edad) VALUES ('','$nombre','$edad')";
if (mysqli_query($coneccion,$sql)) {
    echo "Registro guardado correctamente en la base de datos";
}
else{
    echo "ERROR: ".$sql."<br>".mysqli_error($coneccion);
}