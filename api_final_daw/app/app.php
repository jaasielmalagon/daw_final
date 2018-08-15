<?php

require $contexto_app . '/vendor/autoload.php';

//configuración de la aplicación
$settings = require $contexto_app . '/app/settings.php';

//
if ($env == 'production') {
    $settings['displayErrorDetails'] = false;
}

$app = new \Slim\App(
        array(
    'settings' => $settings
        )
);

//se obtiene el container de Slim
$container = $app->getContainer();
//var_dump($container);

// se agrega los providers

$providers = $contexto_app . '/app/providers/*.php';
foreach (glob($providers) as $filename)
    require $filename;
//var_dump($providers); die();

$routers = $contexto_app . '/app/routes/*.php';
foreach (glob($routers) as $filename)
    require $filename;

//var_dump($filename);die();

$app->run();
?>
