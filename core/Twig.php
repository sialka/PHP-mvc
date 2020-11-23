<?php

namespace core;

class Twig
{

  private $twig;
  private $function = [];

  public function loadTwig()
  {
    $this->twig = new \Twig_Environment($this->loadViews(), [
      "debug" =>  true,
      // "cache" => "/cache",
      "auto_reload" => true,
    ]);

    return $this->twig;
  }

  private function loadViews()
  {
    return new \Twig_Loader_Filesystem("../app/views");
  }
}
