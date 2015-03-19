<?php
require 'vendor/autoload.php';
require 'config/database.php';

// Prepare app
$app = new \Slim\Slim(array(
    'templates.path' => 'templates/',
));
session_start();

use Respect\Validation\Validator as v;
$number = 123;
v::numeric()->validate($number);
require 'models/models.php';
require 'controllers/controllers.php';
require 'services/services.php';

// Configure app
$app->view(new \Slim\Views\Twig());
$app->view->parserExtensions = array(
    new Twig_Extension_Debug()
);

$app->add(new \Slim\Middleware\SessionCookie(array(
    'expires' => '20 minutes',
    'path' => '/login',
    'domain' => null,
    'secure' => false,
    'httponly' => false,
    'name' => 'slim_session',
    'secret' => 'CHANGE_ME',
    'cipher' => MCRYPT_RIJNDAEL_256,
    'cipher_mode' => MCRYPT_MODE_CBC
)));

$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'debug' => true,
    'cache' => realpath('templates/cache'),
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension(), new Twig_Extension_Debug());


$app->container->singleton('log', function () {
    $log = new \Monolog\Logger('slim-skeleton');
    $log->pushHandler(new \Monolog\Handler\StreamHandler('logs/app.log', \Monolog\Logger::DEBUG));
    return $log;
});


// Routes
$app->get('/', function () use ($app) {
   $app->render('index.php', array('userCount' => $app->UserService->count()));
})->name('home');

$app->get('/login', function () use ($app) {
  $app->UserController->all();
  $app['app']->render('login.php');
})->name('login');

$app->post('/login', function() use($app){
  $app->UserController->login('toto');
});

$app->get('/register', function () use ($app, $app) {
  $app->render('register.php',compact($app));
})->name('register');

$app->post('/register',function() use($app){
  $app->UserController->register($app->request());
})->name('postRegister');


// Run app
$app->run();
