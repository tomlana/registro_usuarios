<?php 
require('../../connection.php');
$id = $_GET['id_usuario'];


$con = new DBConnection;

$sql = "select * from usuarios where id = '$id' ";
$usuarios = $con->getSql($sql);
die(json_encode($usuarios));


