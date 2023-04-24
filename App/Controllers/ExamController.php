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
      if ($_SESSION['register']) {
          $_REQUEST['materialType'] = $this->materialTypeRepository->findAllMaterialType();
          require_once "./Resources/Views/Exam/exam.php";
          return;
      }
      require_once "./Resources/Views/noAccess.php";
  }
  
}
