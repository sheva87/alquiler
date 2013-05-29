<?php
include 'cn/cn.php';
session_start();
$cn=  conectarse();

$txt_usuario = $_POST['txt_usuario'];
$txt_clave = $_POST['txt_clave'];

$rsvalidar="SELECT usu.nidusuario,usu.cusuario,per.nidpersona,per.ccorreo FROM usuario usu INNER JOIN persona per ON usu.nidpersona =per.nidpersona
WHERE usu.cusuario = '$txt_usuario' AND usu.cclave ='$txt_clave' AND usu.nestado='1'";
$validar= mysql_query($rsvalidar);
if ($rsvalidar=  mysql_fetch_array($validar)) {
 $_SESSION['nidusuario'] = $rsvalidar['nidusuario'];
 $_SESSION['cusuario'] = $rsvalidar['cusuario'];
 $_SESSION['nidpersona'] = $rsvalidar['nidpersona'];
 $_SESSION['ccorreo'] = $rsvalidar['ccorreo'];
    
 echo '1';
 
}else{
    
 echo '0';   
    
}        

?>
