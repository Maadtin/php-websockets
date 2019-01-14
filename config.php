<?php


use Slim\Container;
use Slim\Http\Environment;
use Slim\Http\Uri;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;


$container = $app->getContainer();


$container['view'] = function (Container $container) {
	$view = new Twig('views', ['cache' => false]);
	$router = $container->get('router');
	$uri = Uri::createFromEnvironment(new Environment($_SERVER));
	$view->addExtension(new TwigExtension($router, $uri));
	return $view;
};
