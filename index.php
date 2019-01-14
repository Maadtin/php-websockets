<?php



require 'vendor/autoload.php';


$app = new \Slim\App([
	 'settings' => [
		  'displayErrorDetails' => true
	 ],
]);



try {

	require 'config.php';

	require 'routes.php';

	$app->run();
} catch (\Slim\Exception\MethodNotAllowedException $e) {
	echo $e->getMessage();
} catch (\Slim\Exception\NotFoundException $e) {
	echo $e->getMessage();
} catch (Exception $e) {
}



