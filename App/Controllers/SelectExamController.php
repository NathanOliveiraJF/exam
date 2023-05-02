<?php

namespace App\Controllers;


use App\Repository\NumberTestAvailableRepository;
use App\Repository\CollectRepository;
use App\Repository\ResultRepository;

class SelectExamController
{
    private $registerRepository;
    private $resultRepository;
    private $numberTestAvailable;
    public function __construct()
    {
        $this->registerRepository = new CollectRepository();
        $this->resultRepository = new ResultRepository();
        $this->numberTestAvailable = new NumberTestAvailableRepository();
    }

    public function viewSelectExam()
    {
        $collects = $this->registerRepository->getCollectAll();
        $_REQUEST['collects'] = $collects;
        require_once "./Resources/Views/Exam/selectExam.php";
//        exit;
    }
    public function viewCollectionExam(): void
    {
        $id = $_GET['id'];
        $reg = $this->registerRepository->getCollectOne($id);
        $typeResult = $this->resultRepository->getResults();
        $numberTest = $this->numberTestAvailable->getNumberTestByCollect($id);
        $_SESSION['collect'] = $reg;
        $_SESSION['results'] = $typeResult;
        $_SESSION['numberTest'] = $numberTest;
        header('Location: http://localhost:8000/exam', true, 301);
    }
}