<?php 
require('../../connection.php');


$con = new DBConnection;

$sql = 'select estados.nome,count(*) from usuarios inner join enderecos on enderecos.id=usuarios.endereco_id 
inner join estados on estados.id=enderecos.estado_id group by estado.nome';
$estados = $con->getSql($sql);
die(json_encode($estados));


