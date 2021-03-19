<?php 
require('../../connection.php');
$id = $_GET['id'];

$con = new DBConnection;

$sql = "delete from usuarios where id='$id'";
$con->setSql($sql);
die(json_encode(["mensagem"=>"Usuário deletado!"]));


