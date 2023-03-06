<?php

use App\Controllers\ExamController;
use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\LoginController;

SimpleRouter::get('/', [LoginController::class,  'viewLogin']);
SimpleRouter::get('/exam', [ExamController::class,  'viewExam']);
