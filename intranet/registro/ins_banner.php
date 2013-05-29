<?php
include '../cn/cn.php';
$cn=  conectarse();

$descripcion=$_POST['descripcion'];

$rutaTemporal=$_FILES['subirimagen']['tmp_name'];
$nombreImagen=$_FILES['subirimagen']['name'];
$rutaDestino= '../imagenes/banner/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$web=$_POST['web'];
$fini=$_POST['fini'];
$ffin=$_POST['ffin'];

$rsinsertar="INSERT INTO banner
            (cdescripcion,
             cimg,
             curl,
             dfechaini,
             dfechafin,
             nestado)
VALUES ('$descripcion',
        '$nombreImagen',
        '$web',
        '$fini',
        '$ffin','1')";
$insertar=  mysql_query($rsinsertar);

header('location: ../por_banner.php');

?>
