<?php

namespace App\Controllers;

use App\Dto\RegisterDto;
use App\Repository\MaterialTypeRepository;
use App\Repository\PatientRepository;
use DateTime;

class RegisterController
{
    private $materialTypeRepository;
    private $patientRepository;
    public function __construct()
    {
        $this->materialTypeRepository = new MaterialTypeRepository();
        $this->patientRepository = new PatientRepository();
    }

    public function viewRegister()
    {
        if ($_SESSION['register']) {
            $_REQUEST['materialType'] = $this->materialTypeRepository->findAllMaterialType();
            $_REQUEST['patients'] = $this->patientRepository->findAllPatient();
            require_once "./Resources/Views/Register/register.php";
            return;
        }
        require_once "./Resources/Views/noAccess.php";
    }

    public function postRegister()
    {
        $data = new RegisterDto(
            collector: $_POST["collector"],
            patient: $_POST["patient"],
            dataNasc: date('d-m-Y', strtotime($_POST["dataNasc"])),
            city: $_POST["city"],
            materialType: $_POST["materialType"],
            isComorbidade: isset($_POST["isComorbidade"]) ? true : false
        );
    }
  
}
