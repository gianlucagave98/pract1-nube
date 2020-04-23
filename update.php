<?php
include "conexion.php";
$link      = conectarse();
$codigo    = $_REQUEST['codigou'];
$descripcion    = $_POST['descripcionu'];
$precio  = $_POST['preciou'];
$stock = $_POST['stocku'];
$link->query("UPDATE articulos SET descripcion='$descripcion', precio='$precio', stock='$stock' WHERE id='$codigo'");
echo 'Datos Actualizados';
header("Location:inicio.php");

?>