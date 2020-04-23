<?php
include "conexion.php";
$link   = conectarse();
$codigo = $_REQUEST['id'];
$link->query("delete from articulos where id='$codigo'");
echo 'Datos eleminados';
header("Location:inicio.php");