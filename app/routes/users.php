<?php
  
  use PhiladelPhia\Router\Router;

  $router = new Router;
  $users = new UsersService; 

  $router->get('/', function($request, $response) {
    global $users;

    $response->json($users->find());
  });

  $router->get('/id/{:id}', function($request, $response) {
    global $users;
    $params = $request->params;

    $response->json($users->findById($params->id));
  });

  return $router;