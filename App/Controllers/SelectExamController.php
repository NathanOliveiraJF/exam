<?php

namespace App\Controllers;

use App\Repository\RegisterRepository;

class SelectExamController
{
    private $registerRepository;
    public function __construct()
    {
        $this->registerRepository = new RegisterRepository();
    }

    public function viewSelectExam()
    {
        $collects = $this->registerRepository->getRegister();
        $_REQUEST['collects'] = $collects;
        require_once "./Resources/Views/Exam/selectExam.php";
    }
}