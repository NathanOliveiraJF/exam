<?php

namespace App\Controllers;

use App\Dto\CollectDto;
use App\Dto\RegisterDto;
use App\Repository\MaterialTypeRepository;
use App\Repository\NumberTestAvailableRepository;
use App\Repository\PatientRepository;
use App\Repository\CollectRepository;
use App\Repository\ResultRepository;
use DateTime;

class CollectController
{
    private $materialTypeRepository;
    private $patientRepository;
    private $collectRepository;
    private $numberTestAvailableRepository;

    private $resultRepository;
    public function __construct()
    {
        $this->materialTypeRepository = new MaterialTypeRepository();
        $this->patientRepository = new PatientRepository();
        $this->collectRepository = new CollectRepository();
        $this->numberTestAvailableRepository = new NumberTestAvailableRepository();
        $this->resultRepository = new ResultRepository();
    }

    public function viewCollects()
    {
        $collects = $this->collectRepository->getCollectAll();
        $_REQUEST['collects'] = $collects;
        require_once "./Resources/Views/Collect/index.php";
    }

    public function viewCollect($id)
    {
        $collect = $this->collectRepository->getCollectOne($id);
        $numberTest = $this->numberTestAvailableRepository->getNumberTestByCollect($collect->getId());
        $resultTestType = $this->resultRepository->getResults();
        $collect->setNumberTest($numberTest);
        $_REQUEST['collect'] = $collect;
        $_REQUEST['resultTestType'] = $resultTestType;
        require_once "./Resources/Views/Collect/view.php";
//        header('Location: http://localhost:8000/exam'.$id, true, 301);
    }

    public function viewNewCollect()
    {

        $_REQUEST['patients'] = $this->patientRepository->findAllPatient();;
        $_REQUEST['materialType'] = $this->materialTypeRepository->findAllMaterialType();;
        require_once "./Resources/Views/Collect/create.php";
        exit;
    }

    public function postCollect()
    {
        $data = new RegisterDto(
            collector: $_POST["collector"],
            patient: $_POST["patient"],
            dataNasc: date('Y-m-d H:i:s', strtotime($_POST["dataNasc"])),
            city: $_POST["city"],
            materialType: $_POST["materialType"],
            isComorbidade: $_POST["isComorbidade"]
        );
        $collectId = $this->collectRepository->postCollect($data);
        $this->numberTestAvailableRepository->postNumberTest($collectId);
        $_REQUEST['sucessfullyMsg'] = true;
        header('Location: http://localhost:8000/collects', true, 301);
        exit;
    }
}
