<?php

namespace App\Repository;

use Database\Connection;

class NumberTestAvailableRepository
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }


    public function getNumberTestByCollect($collect_id)
    {
        $sql = "SELECT quantity FROM number_test_available WHERE collect_id = :collect_id";
        $stmt = $this->connection->getConnection()->prepare($sql);
        $stmt->bindValue("collect_id", $collect_id);
        try {
            $stmt->execute();
            $numberTest = $stmt->fetch();
        } catch (\PDOException $ex) {
            echo $ex;
        }
        return $numberTest['quantity'];
    }

    public function updateNumberTestByCollect($collectId, $numberTest)
    {
        $sql = "UPDATE number_test_available SET quantity = :numberTest WHERE collect_id = :collect_id";
        $stmt = $this->connection->getConnection()->prepare($sql);
        $stmt->bindValue("collect_id", $collectId);
        $stmt->bindValue("numberTest", $numberTest);
        try {
            $stmt->execute();
        } catch (\PDOException $ex) {
            echo $ex;
        }
    }

    public function postNumberTest($collectId)
    {
        $sql = "INSERT INTO number_test_available (collect_id, quantity) VALUES (?,?)";
        $stmt = $this->connection->getConnection()->prepare($sql);
        $stmt->bindValue(1, $collectId);
        $stmt->bindValue(2, 3);
        try {
            $stmt->execute();
        } catch (\PDOException $ex) {
            echo $ex;
        }
    }
}