<?php
require 'vendor/autoload.php';
require 'config/database.php';

// Prepare app
$app = new \Slim\Slim(array(
    'templates.path' => 'templates/',
));

use Respect\Validation\Validator as v;
$number = 123;
v::numeric()->validate($number);
require 'models/models.php';
require 'controllers/controllers.php';
require 'services/services.php';

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
session_start();
$twig->addGlobal('session', $_SESSION);

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


// Routes
$app->get('/', function () use ($app) {
   $app->render('index.php');
})->name('home');

$app->get('/login', function () use ($app) {
  $app->render('login.php');
})->name('login');

$app->post('/login', function() use($app){
  $app->UserController->login($app->request());
});

$app->get('/register', function () use ($app) {
  $app->render('register.php',compact($app));
})->name('register');

$app->post('/register',function() use($app){
  $app->UserController->register($app->request());
})->name('postRegister');


$app->get('/logout',function() use ($app){
  $app->UserController->logout();
});

// Run app
$app->run();
