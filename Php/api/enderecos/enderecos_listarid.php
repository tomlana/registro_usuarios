<?php 
require('../../connection.php');
$id = $_GET['id_endereco'];


$con = new DBConnection;

$sql = "select * from enderecos where id = '$id' ";
$enderecos = $con->getSql($sql);
die(json_encode($enderecos));


