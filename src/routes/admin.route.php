<?php

$app->get('/', function () use ($app) {
   $app->render('index.php');
})->name('home');

$app->get('/login', function () use ($app) {
  $_SESSION['loginError'] = false;
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
