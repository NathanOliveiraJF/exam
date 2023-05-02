<?php

use App\Controllers\PatientController;
use App\Controllers\SelectExamController;
use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\ExamController;
use App\Controllers\LoginController;
use App\Controllers\CollectController;

SimpleRouter::get('/', [LoginController::class,  'viewLogin']);
SimpleRouter::post('/', [LoginController::class,  'authLogin']);
SimpleRouter::get('/exams', [ExamController::class,  'viewExam']);
SimpleRouter::post('/exams', [ExamController::class,  'postExam']);

SimpleRouter::get('/collects', [CollectController::class,  'viewCollects']);
SimpleRouter::get('/collects/create', [CollectController::class, 'viewNewCollect']);
SimpleRouter::get('/collects/{id}', [CollectController::class, 'viewCollect']);
SimpleRouter::post('/collects', [CollectController::class, 'postCollect']);

//SimpleRouter::post('/selectExam', [SelectExamController::class,  'postSelectExam']);
//SimpleRouter::get('/selectExam', [SelectExamController::class,  'viewCollectionExam']);
//SimpleRouter::get('/register', [CollectController::class, 'viewNewCollect']);
//SimpleRouter::get('/patient', [PatientController::class, 'viewResult']);
