<?php 
require('../../connection.php');


$con = new DBConnection;

$sql = 'select * from cidades';
$cidades = $con->getSql($sql);
die(json_encode($cidades));


