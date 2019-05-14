<?php
  
  require_once 'app/models/users.php';

  use PhiladelPhia\Router\Router;

  $router = new Router;

  $router->get('/', function($request, $response) {
    $response->json(array('Hello' => 'User'));
  });

  return $router;