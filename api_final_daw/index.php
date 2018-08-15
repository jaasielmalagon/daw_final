<?php
header ('Access-Control-Allow-Credentials: true');
header ('Access-Control-Allow-Origin: *');
header ('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header ('Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Allow-Method, Authorization');

session_start();

//Direccion del la aaplicación
$contexto_app = __DIR__;
//var_dump($contexto_app); die();

//se establece el entorno de la aaplicación

$env = 'development';// development production

//se agrega la configuración de la aaplicación
require $contexto_app . "/app/app.php"
 ?>
