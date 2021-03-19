<?php 
require('../../connection.php');


$con = new DBConnection;

$sql = 'select * from usuarios';
$usuarios = $con->getSql($sql);
die(json_encode($usuarios));


