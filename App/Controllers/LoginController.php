<?php

namespace App\Controllers;

use App\Dto\LoginDto;
use App\Repository\LoginRepository;

class LoginController
{
    private $loginRepository;

    public function __construct()
    {
        $this->loginRepository = new LoginRepository();
    }

    public function viewLogin()
    {
        require_once "./Resources/Views/Login/login.php";
    }

    public function authLogin()
    {
        $user = $this->loginRepository->findUser(new LoginDto(
            name: $_POST['nameUser'],
            password: $_POST['passUser']
        ));
        if (empty($user)) {
            $_REQUEST['warning'] = "usuario ou senha invalidos";
            $this->viewLogin();
            return;
        }
        $_SESSION[$user->getRoleName()] = true;
        header('Location: http://localhost:8000/'.$user->getRoleName(), true, 301);
    }

}
