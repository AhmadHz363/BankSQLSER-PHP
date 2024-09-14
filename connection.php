<?php
$servername= "DESKTOP-EQDSUD3\SQLEXPRESS";
$database= "bank";



$connection=  [
"Database" =>$database,
];

$con= sqlsrv_connect($servername,$connection);

if(!$con)
{
    die(print_r(sqlsrv_errors(),true));
}

?>