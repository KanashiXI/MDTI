<?php
require_once '/lib/Slim/Slim/Slim.php';
require_once '/controllers/IntensitiveController.php';

  Slim\Slim::registerAutoloader();
  $app = new Slim\Slim();

  function response($status, $response) {
    $app = \Slim\Slim::getInstance();
    $app->status($status);
    $app->contentType('application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);
  }

  $app->get('/jsonemp',['IntensitiveController','index']);

  $app->run();
?>
