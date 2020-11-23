<?php

// $user = new \Twig\TwigFunction("user", function () {
//   return "dados user";
// });

// $teste = new \Twig\TwigFunction("teste", function () {
//   return "dados teste";
// });

// $this->twig()->addFunction($user);
// $this->twig()->addFunction($teste);

$this->functions[] = $this->functionsToView("user", function () {
  return "dados do user";
});


$this->functions[] = $this->functionsToView("teste", function () {
  return "dados de teste";
});
