<?php

namespace App\Models;

class Patient
{
    private string $id;
    private string $name_patient;

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


}