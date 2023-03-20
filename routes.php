<?php

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\ExamController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;

SimpleRouter::get('/', [LoginController::class,  'viewLogin']);
SimpleRouter::post('/', [LoginController::class,  'authLogin']);
SimpleRouter::get('/exam', [ExamController::class,  'viewExam']);
SimpleRouter::get('/register', [RegisterController::class,  'viewRegister']);
