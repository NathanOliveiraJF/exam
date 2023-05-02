<?php

namespace App\Dto;

class ExamDto
{
    public readonly string $resultTest;
    public readonly string $idCollect;
    public readonly string $statusCollect;

    /**
     * @param string $idCollect
     * @param string $idResult
     */
    public function __construct(string $idCollect, string $idResult)
    {
        $this->idCollect = $idCollect;
        $this->idResult = $idResult;
    }

}