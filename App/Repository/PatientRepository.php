<?php

namespace App\Repository;

use Database\Connection;
use PDO;
use PDOException;
class PatientRepository
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function findAllPatient()
    {
        $sql = "select * from patient";
        $stmt = $this->connection->getConnection()->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'App\Models\Patient');

        try {
            $stmt->execute();
            $patient = $stmt->fetchAll();
        } catch (\PDOException $ex) {
            echo $ex;
        }
        return $patient;
    }

}