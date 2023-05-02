<?php

namespace App\Repository;

use App\Dto\CollectDto;
use App\Dto\RegisterDto;
use App\Models\SelectExam;
use Database\Connection;

class CollectRepository
{
    private $connection;
    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function postCollect(RegisterDto $register)
    {
        $sql = "INSERT INTO collect (collector, patient_id, data_nasc, city, material_type_id, risc_group, comorbidity) VALUES (?, ?, ?, ?, ?, ?, ?)";
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
        return (int) $this->connection->getConnection()->lastInsertId();
    }

    public function getCollectAll(): array|bool
    {
        $sql = "SELECT c.id, c.collector, p.name_patient, mt.typeName
        FROM collect as c, patient as p, material_type as mt
        WHERE c.patient_id = p.id and mt.id = c.material_type_id;";
        $stmt = $this->connection->getConnection()->prepare($sql);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'App\Dto\CollectDto');

        try {
            $stmt->execute();
            $collects = $stmt->fetchAll();
        } catch (\PDOException $ex) {
            echo $ex;
        }

        return $collects;
    }

    public function getCollectOne($id): CollectDto
    {
        $sql = "SELECT c.id, c.collector, p.name_patient, mt.typeName
        FROM collect as c, patient as p, material_type as mt
        WHERE c.patient_id = p.id and mt.id = c.material_type_id and c.id = :id";
        $stmt = $this->connection->getConnection()->prepare($sql);
        $stmt->bindValue("id", $id);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'App\Dto\CollectDto');
        try {
            $stmt->execute();
            $collect = $stmt->fetch();
        } catch (\PDOException $ex) {
            echo $ex;
        }
        return $collect;
    }
}