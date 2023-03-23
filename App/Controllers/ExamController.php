<?php

namespace App\Controllers;

class ExamController 
{
  public function viewExam() 
  {
      if ($_SESSION['user']) {
        if($_SESSION['user']->getRoleId() == LoginController::CADASTRO) {
          require_once "./Resources/Views/Exam/exam.php";
          return;
        }
      }
      header('Location: http://localhost:8000/', true);
      return;
  }
  
}
