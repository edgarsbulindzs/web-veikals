<?php
require '../vendor/autoload.php';
$app = new \Slim\Slim(array(
    'debug' => true,
    'view' => new \Slim\Views\Twig(),
    'templates.path' => '../templates',
));
$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
);
$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);
$app->get('/', function () use ($app) {
    $app->render('base.html.twig', array(
        'active'=>'home'
        ));
})->name('home');
$app->run();