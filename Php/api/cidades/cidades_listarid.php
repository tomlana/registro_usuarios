<?php 
require('../../connection.php');
$id = $_GET['id_cidade'];


$con = new DBConnection;

$sql = "select * from cidades where id = '$id' ";
$cidades = $con->getSql($sql);
die(json_encode($cidades));


