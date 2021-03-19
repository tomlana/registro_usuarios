<?php 
require('../../connection.php');


$con = new DBConnection;

$sql = 'select * from enderecos';
$enderecos = $con->getSql($sql);
die(json_encode($enderecos));


