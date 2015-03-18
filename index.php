<?php
require 'vendor/autoload.php';
require 'config/db.php';
require 'config/database.php';


// Prepare app
$app = new \Slim\Slim(array(
    'templates.path' => 'templates/',
));


// Require classes
$pimple = new \Pimple\Container();
$pimple['app'] = $app;

require 'models/models.php';
require 'controllers/controllers.php';
require 'services/services.php';


$pimple['db'] = function ($pimple) {
    return new Db($pimple);
};

// Configure app
$app->view(new \Slim\Views\Twig());
$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'cache' => realpath('templates/cache'),
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());

$app->container->singleton('log', function () {
    $log = new \Monolog\Logger('slim-skeleton');
    $log->pushHandler(new \Monolog\Handler\StreamHandler('logs/app.log', \Monolog\Logger::DEBUG));
    return $log;
});


// Routes
$app->get('/', function () use ($pimple) {
   $pimple['app']->render('index.html', array('userCount' => $pimple['UserService']->count()));
})->name('home');

$app->get('/login', function () use ($pimple) {
  $pimple['UserController']->all();
  $pimple['app']->render('login.html');
})->name('login');

$app->post('/login', function() use($pimple){
  $pimple['UserController']->login('toto');
});

$app->get('/register', function () use ($pimple) {
  $pimple['app']->render('register.html', array('userCount' => $pimple['UserService']->count()));
});

$app->post('/register', function() use($pimple){
  $pimple['UserController']->register('toto');
});


// Run app
$app->run();
