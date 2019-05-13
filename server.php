<?php 

  require_once 'vendor/autoload.php';

  use PhiladelPhia\App\App;
  use PhiladelPhia\Router\Router;

  $app = new App();

  
  $app->get('/api', function($request, $response) {
    $response->json(array('Hello' => 'World'));
  });

  
  $userRouter = require_once __DIR__.'/app/routes/users.php';
  $app->use('/api/users', $userRouter);
  
  $app->run();