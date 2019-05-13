<?php
  
  use PhiladelPhia\Router\Router;
  use PhiladelPhia\Interfaces\RequestInterface as IRequest;
  use PhiladelPhia\Interfaces\ResponseInterface as IResponse;

  $router = new Router;

  $router->get('/', function(IRequest $request, IResponse $response) {
    $response->json(array('Hello' => 'User'));
  });

  return $router;