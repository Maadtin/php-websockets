<?php


use App\Controllers\HomeController;

$app->get('/', HomeController::class.':index')->setName('home');
$app->get('/chat', HomeController::class.':chat')->setName('chat');