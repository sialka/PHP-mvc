  <?php

  require "vendor/autoload.php";
  require "app/functions/helpers.php";

  use app\classes\Bind;

  $config = require "config.php";

  Bind::set("config", $config);
