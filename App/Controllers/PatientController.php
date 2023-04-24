<?php

namespace App\Controllers;

class PatientController
{
    public function viewResult()
    {
        if ($_SESSION['patient']) {
            echo $_SESSION['patient'];
            require_once "./Resources/Views/Patient/patient.php";
            return;
        }
        require_once "./Resources/Views/noAccess.php";
    }
}