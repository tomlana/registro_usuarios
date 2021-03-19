<?php 
require('../../connection.php');


$con = new DBConnection;

$sql = 'select cidades.nome,count(*) from usuarios inner join enderecos on enderecos.id=usuarios.endereco_id 
inner join cidades on cidades.id=enderecos.cidade_id group by cidades.nome';
$cidades = $con->getSql($sql);
die(json_encode($cidades));


