<?php
  
  use PhiladelPhia\Router\Router;

  $router = new Router;
  $users = new UsersService; 

  $router->get('/', function($request, $response) {
    global $users;

    $res = $users->find(['name', 'like', '%fer%']);
    $response->json(array(
      'items' => $res,
      'count' => count($res)
    ));
  });

  $router->get('/id/{:id}', function($request, $response) {
    global $users;
    $params = $request->params;

    $response->json(array(
      'item' => $users->findById($params->id)
    ));
  });

  return $router;