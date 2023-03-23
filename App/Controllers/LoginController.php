<?php

namespace App\Controllers;

use App\Dto\LoginDto;
use App\Repository\LoginRepository;

class LoginController 
{
  const CADASTRO = 1;
  const TECNICO = 2;
  const SUPERVISOR = 3;
  const PACIENTE = 4;

  private $loginRepository;

  public function __construct() {
    $this->loginRepository = new LoginRepository();
  }

  public function viewLogin() 
  {
    require_once "./Resources/Views/Login/login.php";
  }

  public function authLogin()
  {
     $data = new LoginDto(
       name: $_POST['nameUser'],
       password: $_POST['passUser']
     );

    $user = $this->loginRepository->findUser($data);
    if($user) {
      $_SESSION['user'] = $user;
      if ($user->getRoleId() == self::CADASTRO) {
        header('Location: http://localhost:8000/exam', true, 301);
        exit;
      }
      if ($user->getRoleId() == self::TECNICO) {
        header('Location: http://localhost:8000/register', true, 301);
        exit;
      }
    } else {
      $_REQUEST['warning'] = "usuario ou senha invalidos";
      $this->viewLogin();
    }
  }
  
}
