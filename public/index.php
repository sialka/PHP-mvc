<?php

require "../bootstrap.php";

use app\classes\Uri;
use core\Controller;

# dd(Uri::uri());

try {
  $controller =  new Controller;
  $controller = $controller->load();
  dd($controller);
} catch (\Exception $e) {
  dd($e->getMessage());
}
