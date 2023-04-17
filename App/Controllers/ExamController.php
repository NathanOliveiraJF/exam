<?php

namespace App\Controllers;

use App\Repository\MaterialTypeRepository;

class ExamController 
{
  private $materialTypeRepository;

  public function __construct() 
  {
    $this->materialTypeRepository = new MaterialTypeRepository();
  }
  public function viewExam() 
  {
      if ($_SESSION['user']) {
        if($_SESSION['user']->getRoleId() == LoginController::CADASTRO) {
          $_REQUEST['materialType'] = $this->materialTypeRepository->findAllMaterialType();
          require_once "./Resources/Views/Exam/exam.php";
          return;
        }
      }
      header('Location: http://localhost:8000/', true);
      return;
  }
  
}
