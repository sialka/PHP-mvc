<?php

namespace app\traits;

use core\Twig;

trait View
{
  private function twig()
  {

    dd("aqui");
    $twig = new Twig;

    return $twig->loadTwig();
  }

  public function view($data, $view)
  {

    $template = $this->twig->load(str_replace(".", "/", $view) . "html");

    dd("aqui");

    return $template->display($data);
  }
}
