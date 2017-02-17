<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->get('/', function() use ($app) {
        return 'Hello';
    });

    return $app;
?>
