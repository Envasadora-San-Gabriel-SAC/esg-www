<?php

$usu=$_REQUEST['usu'];
$pas=$_REQUEST['pas'];

$cnx = new PDO("sqlsrv:Server=192.168.1.254;Database=PAVSO-APP", "soporte", "10726242297.");
$res=$cnx->query("select ps_nombre from usuario where ps_usuario='$usu' and ps_pasword='$pas' ");

$datos=array();

foreach ($res as $row){
    $datos[]=$row;
}
 echo json_encode($datos);