<?php
 $nombre ="Oscary";
 $apellidoP ="Basurto";
 $apellidoM = "Basurto";
 $edad = "19";
 $gustos = ["Jugar Futbol", "Escuchar Rap","Programar","Jugar videojuegos","Aprender cosas nuevas"];
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body>
    <table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Edad</th>
            <th>Gustos</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>';echo $nombre; echo'</td>
            <td>';echo $apellidoP; echo'</td>
            <td>';echo $apellidoM; echo'</td>
            <td>';echo $edad; echo'</td>
            <td>';echo json_encode($gustos); echo'</td>
        </tr>
    </tbody>
</table>
    
    
    '; 
    
   
    echo '

</body>
</html>';
?>