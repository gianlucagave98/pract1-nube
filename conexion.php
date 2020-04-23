<?php
function conectarse()
{
    if (!($conex = new mysqli('uc13jynhmkss3nve.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','ycwwa1vdb07ov1s1','y069wqhameztgysv','x0j773sdw16kjnsp'))) {
        echo "Error conectandose a la base de datos";
        exit();
    }
    return $conex;

}
?>