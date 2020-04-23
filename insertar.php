<?php
$cod    = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$precio    = $_POST['precio'];
$stock    = $_POST['stock'];

include "conexion.php";
$link = conectarse();

if (isset($_POST['guardar'])) {

    $link->query("INSERT INTO articulos(id,descripcion,precio,stock)values('$cod','$descripcion','$precio','$stock')");

    echo ' <script language="javascript">alert("Articulo registrado con éxito");</script> ';
    header("Location:inicio.php");
} else {
    echo ("Presiona el boton guardar");
}

?>

