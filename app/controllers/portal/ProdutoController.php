<?php

namespace app\controllers\portal;

use app\controller\ContainerController;

class ProdutoController extends ContainerController
{

  public function index()
  {
    dd("index");
  }

  public function show($request)
  {
    dd($request->next);
  }
}
