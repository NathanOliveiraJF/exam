<?php

namespace App\Controllers;

use App\Dto\RegisterDto;
use App\Repository\MaterialTypeRepository;
use App\Repository\PatientRepository;
use App\Repository\RegisterRepository;
use DateTime;

class RegisterController
{
    private $materialTypeRepository;
    private $patientRepository;
    private $registerRepository;
    public function __construct()
    {
        $this->materialTypeRepository = new MaterialTypeRepository();
        $this->patientRepository = new PatientRepository();
        $this->registerRepository = new RegisterRepository();

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
            dataNasc: date('Y-m-d H:i:s', strtotime($_POST["dataNasc"])),
            city: $_POST["city"],
            materialType: $_POST["materialType"],
            isComorbidade: $_POST["isComorbidade"]
        );
       $this->registerRepository->postRegister($data);
    }
  
}
