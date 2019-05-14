<?php
  
  use PhiladelPhia\Router\Router;

  $router = new Router;

  $router->get('/', function($request, $response) {
    $users = new Users;

    $users->find();

    $response->json(array('Hello' => 'User'));
  });

  return $router;