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
      "title" => "Estudo de PHP MVC",
      "curso" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut magni quis odio nobis expedita dicta distinctio velit, tempora, similique consectetur quaerat asperiores quia adipisci soluta? Dolorum laboriosam dolor obcaecati quia?"
    ], "portal.curso");
  }
}
