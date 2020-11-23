<?php

require "../bootstrap.php";

use app\classes\Uri;
use core\Controller;
use core\Method;
use core\Parameters;

# dd(Uri::uri());

try {
  $controller =  new Controller;
  $controller = $controller->load();

  # dd($controller);

  $method = new Method;
  $method = $method->load($controller);

  $parameters = new Parameters;
  $parameters = $parameters->load();

  $controller->$method($parameters);
} catch (\Exception $e) {
  dd($e->getMessage());
}
