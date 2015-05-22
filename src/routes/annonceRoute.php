<?php

$app->get('/createAnnonce', function() use($app){
  $app->render('createAnnonce.php');
})->name('createAnnonce');

$app->post('/createAnnonce',function() use($app){
  $app->AnnonceController->create($app->request());
})->name('postCreateAnnonce');
