<?php

namespace App\Controllers;

use App\Dto\LoginDto;
use App\Repository\LoginRepository;

class LoginController 
{
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
    } else {
      $_REQUEST['warning'] = "usuario ou senha invalidos";
      $this->viewLogin();
    }
  }
  
}
