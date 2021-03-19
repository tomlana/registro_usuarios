<?php 
require('../../connection.php');
$id = $_GET['id_usuario'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$estado_id = $_POST['estado_id'];


$con = new DBConnection;

$sql = "update set nome='$nome',senha='$senha',estado_id='$estado_id' usuarios where id='$id'";
$con->setSql($sql);
die(json_encode(["mensagem"=>"Erro ao salvar informações"]));


