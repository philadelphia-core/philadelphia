<?php
  
  use PhiladelPhia\Router\Router;

  $router = new Router;
  $users = new UsersService; 

  $router->get('/', function($request, $response) {
<<<<<<< HEAD
    $users = new UsersService;
    $users->find();
    $response->json(array('Hello' => 'User'));
=======
    global $users;

    $response->json($users->find());
>>>>>>> c49d67d8af25c234c6735440fcb56cd51d0c524b
  });

  return $router;