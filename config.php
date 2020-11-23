<?php

return [
  "database" => [
    "host" => "localhost",
    "dbname" => "teste06",
    "username" => "root",
    "password" => "suporte",
    "charset" => "utf8",
    "options" => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]
  ]
];
