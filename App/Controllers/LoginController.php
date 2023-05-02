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
        $url = 'Location: http://localhost:8000';
        if ($user->getRoleId() == ("1" || "2")) {
            $url = $url."/collects";
            $_SESSION['user'] = $user;
        }
        header($url, true, 301);
    }

}
