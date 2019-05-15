<?php
  
  use PhiladelPhia\Router\Router;

  $router = new Router;

  $router->get('/', function($request, $response) {
    $users = new UsersService;
    $users->find();
    $response->json(array('Hello' => 'User'));
  });

  return $router;