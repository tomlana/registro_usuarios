<?php 
require('../../connection.php');


$con = new DBConnection;

$sql = 'select * from estados';
$estados = $con->getSql($sql);
die(json_encode($estados));


