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
        $sql = "insert into register set collector = :collector, patient_id = :patient_id, data_nasc = :data_nasc, city = :city, material_type_id = :material_type_id, risc_group = :risc_group, comorbidity = :comorbidity";
        $stmt = $this->connection->getConnection()->prepare($sql);
        $stmt->bindValue(":collector", $register->collector);
        $stmt->bindValue(":patient_id", $register->patient_id);
        $stmt->bindValue(":data_nasc",$register->data_nasc);
        $stmt->bindValue(":city",$register->city);
        $stmt->bindValue(":material_type_id",$register->material_type_id);
        $stmt->bindValue(":risc_group",$register->isComorbidade);
        $stmt->bindValue(":comorbidity",$register->isComorbidade);
        // $stmt->setFetchMode(PDO::FETCH_CLASS, 'App\Models\');

        try {
            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex;
        }
        return $user;
    }
}