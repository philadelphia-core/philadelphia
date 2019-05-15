<?php
  
  use PhiladelPhia\Router\Router;

  $router = new Router;
  $users = new UsersService; 

  $router->get('/', function($request, $response) {
    global $users;

    $response->json($users->find());
  });

  return $router;