<?php

namespace App\Dto;

class CollectDto
{
    private  string $id;
    private  string $name_patient;
    private  string $collector;
    private  string $typeName;
    private string $numberTest;
    private string $result_obtained_id;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNamePatient(): string
    {
        return $this->name_patient;
    }

    /**
     * @param string $name_patient
     */
    public function setNamePatient(string $name_patient): void
    {
        $this->name_patient = $name_patient;
    }

    /**
     * @return string
     */
    public function getCollector(): string
    {
        return $this->collector;
    }

    /**
     * @param string $collector
     */
    public function setCollector(string $collector): void
    {
        $this->collector = $collector;
    }

    /**
     * @return string
     */
    public function getMaterialUsed(): string
    {
        return $this->typeName;
    }

    /**
     * @param string $typeName
     */
    public function setMaterialUsed(string $typeName): void
    {
        $this->typeName = $typeName;
    }

    /**
     * @return string
     */
    public function getNumberTest(): string
    {
        return $this->numberTest;
    }

    /**
     * @param string $numberTest
     */
    public function setNumberTest(string $numberTest): void
    {
        $this->numberTest = $numberTest;
    }

    /**
     * @return string
     */
    public function getResultObtainedId(): string
    {
        return $this->result_obtained_id;
    }

    /**
     * @param string $result_obtained_id
     */
    public function setResultObtainedId(string $result_obtained_id): void
    {
        $this->result_obtained_id = $result_obtained_id;
    }

}