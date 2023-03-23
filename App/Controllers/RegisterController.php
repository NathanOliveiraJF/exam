<?php

namespace App\Controllers;

class RegisterController 
{
  public function viewRegister() 
  {
    if ($_SESSION['user']) {
      if($_SESSION['user']->getRoleId() == LoginController::TECNICO) {
        require_once "./Resources/Views/Register/register.php";
        return;
      }
    }
    header('Location: http://localhost:8000/', true);
  }
  
}
