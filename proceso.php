<?php
/*
require 'menu.php';
*/
/*
var_dump($_POST);


echo $codigo=$_POST["codigo"];
echo $mt2=$_POST["mt2"];
echo $fecha=$_POST["fechaAvance"];
echo $nombre=$_POST["nombre"];
echo $correo=$_POST["correo"];
echo $piso=$_POST["piso"];
echo $comment=$_POST["comment"];
*/

$codigo=$_POST["codigo"];
$mt2=$_POST["mt2"];
$fecha=$_POST["fechaAvance"];
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$piso=$_POST["piso"];
$comment=$_POST["comment"];





?>

<b>
    Codigo: <?=$codigo;?>
    Metros Cuadrados: <?=$mt2;?>
    Fecha ingresada: <?=$fecha;?>
    Nombre: <?=$nombre;?>
    Correo: <?=$correo;?>
    Piso: <?=$piso;?>
    Comentario: <?=$comment;?>
    
</b>