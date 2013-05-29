<?php
include '../cn/cn.php';
$cn=  conectarse();

$apellidos=$_POST['apellidos'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$comentario=$_POST['comentario'];

$rsinsertar="INSERT INTO contacto
            (capellidos,
             cnombre,
             cemail,
             ctelefono,
             cmensaje,
             nestado)
VALUES ('$apellidos',
        '$nombre',
        '$email',
        '$telefono',
        '$comentario',
        '1');";
$insertar=  mysql_query($rsinsertar);


        
?>
