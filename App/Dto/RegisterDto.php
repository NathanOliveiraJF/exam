<?php

namespace App\Dto;

use DateTime;

class RegisterDto
{
    public readonly string $collector;
    public readonly string $patient;
    public readonly string $dataNasc;
    public readonly string $city;
    public readonly string $materialType;
    public readonly bool $isComorbidade;

    /**
     * @param string $collector
     * @param string $patient
     * @param string $dataNasc
     * @param string $city
     * @param string $materialType
     * @param bool $isComorbidade
     */
    public function __construct(string $collector, string $patient, string $dataNasc, string $city, string $materialType, bool $isComorbidade)
    {
        $this->collector = $collector;
        $this->patient = $patient;
        $this->dataNasc = $dataNasc;
        $this->city = $city;
        $this->materialType = $materialType;
        $this->isComorbidade = $isComorbidade;
    }


}