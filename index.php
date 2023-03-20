<?php

use Pecee\SimpleRouter\SimpleRouter;

require "./vendor/autoload.php";
require "./vendor/pecee/simple-router/helpers.php";
require "./routes.php";

session_start();

SimpleRouter::start();
