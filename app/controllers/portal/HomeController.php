<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;
use app\models\portal\User;

class HomeController extends ContainerController
{

  public function index()
  {
    // dd("index");

    $user = new User;
    $users = $user->all();

    $this->view([
      "title" => "Home Alimentos",
      "users" => $users
    ], "portal.home");

    // dd($users);
  }
}
