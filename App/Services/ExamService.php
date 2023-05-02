<?php

namespace App\Services;

use App\Dto\ExamDto;
use App\Repository\ExamRepository;

class ExamService
{
    private $examRepository;

    public function __construct()
    {
        $this->examRepository = new ExamRepository();
    }

    public function postExam(ExamDto $examDto)
    {
        $this->examRepository->postExam($examDto);
    }
}