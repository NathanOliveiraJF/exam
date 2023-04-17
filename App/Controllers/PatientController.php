<?php

namespace App\Controllers;

class PatientController
{
    public function viewResult()
    {
        if ($_SESSION['user']) {
            if($_SESSION['user']->getRoleId() == LoginController::PACIENTE) {
                require_once "./Resources/Views/Patient/patient.php";
                return;
            }
        }
        header('Location: http://localhost:8000/', true);
    }
}