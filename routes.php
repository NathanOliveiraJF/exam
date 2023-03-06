<?php

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\LoginController;

SimpleRouter::get('/', [LoginController::class,  'viewLogin']);
