<?php

// web/index.php
require_once __DIR__.'../vendor/autoload.php';

$app = new Silex\Application();
// Turning on debugging
$app['debug'] = true;

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello '.$app->escape($name);
});

$app->run();