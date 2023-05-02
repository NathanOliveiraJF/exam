<?php

namespace App\Repository;

use App\Dto\ExamDto;
use App\Models\Exam;
use Database\Connection;
use PDOException;

class ExamRepository
{
    private $connection;
    private $result;
    private $numberTestAvailableRepository;

    public function __construct()
    {
        $this->connection = new Connection();
        $this->result = new ResultRepository();
        $this->numberTestAvailableRepository = new NumberTestAvailableRepository();
    }

    public function postExam(Exam $exam, $testNumber): int
    {
        $this->numberTestAvailableRepository->updateNumberTestByCollect($exam->getCollectId(), (int) $testNumber - 1);
        $sql = "INSERT INTO exam (result_obtained_id, collect_id) VALUES (?, ?)";
        $stmt = $this->connection->getConnection()->prepare($sql);
        $stmt->bindValue(1, $exam->getResultObtainedId());
        $stmt->bindValue(2, $exam->getCollectId());
        if (!$stmt->execute()) {
            throw new PDOException();
        }
        return (int) $this->connection->getConnection()->lastInsertId();
    }

    public function getExamAll()
    {
        $sql = "SELECT * FROM exam";
        $stmt = $this->connection->getConnection()->prepare($sql);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'App\Dto\ExamDto');

        if (!$stmt->execute()) {
            throw new PDOException();
        }
       return $stmt->fetchAll();
    }
}