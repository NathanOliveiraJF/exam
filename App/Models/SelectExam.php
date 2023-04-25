<?php

namespace App\Models;

class SelectExam
{
    private $id;
    private $name_patient;
    private $collector;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNamePatient()
    {
        return $this->name_patient;
    }

    /**
     * @param mixed $name_patient
     */
    public function setNamePatient($name_patient): void
    {
        $this->name_patient = $name_patient;
    }

    /**
     * @return mixed
     */
    public function getCollector()
    {
        return $this->collector;
    }

    /**
     * @param mixed $collector
     */
    public function setCollector($collector): void
    {
        $this->collector = $collector;
    }
}