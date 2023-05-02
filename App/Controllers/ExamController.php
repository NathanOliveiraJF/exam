<?php

namespace App\Controllers;

use App\Dto\ExamDto;
use App\Models\Exam;
use App\Repository\ExamRepository;
use App\Repository\MaterialTypeRepository;

class ExamController 
{
  private $materialTypeRepository;
  private $examRepository;

  public function __construct() 
  {
    $this->materialTypeRepository = new MaterialTypeRepository();
    $this->examRepository = new ExamRepository();
  }
  public function viewExam($id)
  {
      echo "collect with id " . $id;
//      if ($_SESSION['exam']) {
//          require_once "./Resources/Views/Exam/create.php";
//          return;
//      }
//      require_once "./Resources/Views/noAccess.php";
  }

  public function viewExams()
  {

  }

  public function postExam(): void
  {
      $exam = new Exam("", $_POST['resultId'], $_POST['collectId']);
      $this->examRepository->postExam($exam, $_POST['numberTest']);
      header('Location: http://localhost:8000/collects/'.$exam->getCollectId(), true, 301);
      exit;
  }
}
