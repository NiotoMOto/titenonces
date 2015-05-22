<?php

// Prepare app
$app = new \Slim\Slim(array(
    'templates.path' => TEMPLATEDIR,
));

// Views
$app->view(new \Slim\Views\Twig());
$app->view->parserExtensions = array(
    new Twig_Extension_Debug()
);
$twig = $app->view->getEnvironment();

$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'debug' => true,
    'cache' => realpath('templates/cache'),
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension(), new Twig_Extension_Debug());

// Session
$authenticate = function ($app) {
    return function () use ($app) {
        if (!isset($_SESSION['user'])) {
            $_SESSION['urlRedirect'] = $app->request()->getPathInfo();
            $app->flash('error', 'Login required');
            $app->redirect($app->urlFor('login'));
        }
    };
};

// Log
$app->container->singleton('log', function () {
    $log = new \Monolog\Logger('slim-skeleton');
    $log->pushHandler(new \Monolog\Handler\StreamHandler('logs/app.log', \Monolog\Logger::DEBUG));
    return $log;
});
