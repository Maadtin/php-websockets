<?php


use App\Chat\Chat;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;


require 'vendor/autoload.php';

$server = IoServer::factory(
	 new HttpServer(
		  new WsServer(
				new Chat()
		  )
	 ),
	 5050
);

$server->run();