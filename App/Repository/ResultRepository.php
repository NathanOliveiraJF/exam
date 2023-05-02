<?php

namespace App\Repository;

use App\Models\Result;
use Database\Connection;

class ResultRepository
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function getResults(): array|bool
    {
        $sql = "SELECT * FROM result_obtained";
        $stmt = $this->connection->getConnection()->prepare($sql);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'App\Models\Result');

        try {
            $stmt->execute();
            $results = $stmt->fetchAll();
        } catch (\PDOException $ex) {
            echo $ex;
        }

        return $results;
    }



}