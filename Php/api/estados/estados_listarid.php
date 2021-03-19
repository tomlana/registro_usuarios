<?php 
require('../../connection.php');
$id = $_GET['id_estado'];


$con = new DBConnection;

$sql = "select * from estados where id = '$id' ";
$estados = $con->getSql($sql);
die(json_encode($estados));


