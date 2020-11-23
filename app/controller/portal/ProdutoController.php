<?php

namespace app\controller\portal;

class ProdutoController
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
