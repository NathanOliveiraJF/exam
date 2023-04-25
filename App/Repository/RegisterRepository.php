<?php

namespace App\Repository;

use App\Dto\RegisterDto;
use Database\Connection;

class RegisterRepository
{
    private $connection;
    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function postRegister(RegisterDto $register)
    {
        $sql = "INSERT INTO collect (collector, patient_id, data_nasc, city, material_type_id, risc_group, comorbidity) VALUES (?, ?, ?, ?, ?, ?,? )";
        $stmt = $this->connection->getConnection()->prepare($sql);
        $stmt->bindValue(1, $register->collector);
        $stmt->bindValue(2, $register->patient);
        $stmt->bindValue(3,$register->dataNasc);
        $stmt->bindValue(4,$register->city);
        $stmt->bindValue(5,$register->materialType);
        $stmt->bindValue(6,$register->isComorbidade);
        $stmt->bindValue(7,$register->isComorbidade);
        try {
            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex;
        }
    }
}