<?php 
require('../../connection.php');
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$endereco_id = $_POST['endereco_id'];


$con = new DBConnection;

$sql = "insert into usuarios(nome,senha,endereco_id) values ('$nome','$senha','$endereco_id')";
$con->setSql($sql);
die(json_encode(["mensagem"=>"Usuário cadastradao!"]));


