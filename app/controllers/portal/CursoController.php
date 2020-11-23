<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;

class CursoController extends ContainerController
{

  public function index()
  {
    dd("index");
  }

  public function show($request)
  {
    $this->view([
      "curso" => "Estudo de PHP MVC"
    ], "portal.cursos");
  }
}
