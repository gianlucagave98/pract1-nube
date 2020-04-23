<?php

$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];

if(empty($usuario) || empty($pass)){
header("Location: index.html");
exit();
}

$conexion = new mysqli('uc13jynhmkss3nve.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','ycwwa1vdb07ov1s1','y069wqhameztgysv','x0j773sdw16kjnsp');


$result = $conexion->query("SELECT * from cliente where usuario='" . $usuario . "'");

if($row = $result->fetch_object()){
if($row->clave == $pass){
session_start();
$_SESSION['usuario'] = $row->nombre;
header("Location: inicio.php");
}else{
header("Location: index.php");
exit();
}
}else{
header("Location: index.php");
exit();
}


?>