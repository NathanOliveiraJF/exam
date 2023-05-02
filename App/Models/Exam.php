<?php

namespace App\Models;

class Exam
{
    private string $id;
    private string $result_obtained_id;
    private string $collect_id;

    /**
     * @param string $id
     * @param string $result_obtained_id
     * @param string $collect_id
     */
    public function __construct(string $id, string $result_obtained_id, string $collect_id)
    {
        $this->id = $id;
        $this->result_obtained_id = $result_obtained_id;
        $this->collect_id = $collect_id;
    }

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

    /**
     * @return string
     */
    public function getCollectId(): string
    {
        return $this->collect_id;
    }

    /**
     * @param string $collect_id
     */
    public function setCollectId(string $collect_id): void
    {
        $this->collect_id = $collect_id;
    }

}