<?php

namespace App\Repository;

use App\Dto\LoginDto;
use App\Models\User;
use Database\Connection;
use PDO;
use PDOException;

class LoginRepository 
{
  private $connection;
  public function __construct() 
  {
    $this->connection = new Connection();
  }

  public function findUser(LoginDto $login): User
  {
    $sql = "select * from login where name = :name and password = :password";
    $stmt = $this->connection->getConnection()->prepare($sql);
    $stmt->bindValue(":name", $login->name);
    $stmt->bindValue(":password", $login->password);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'App\Models\User');

    try {
      $stmt->execute();
      $user = $stmt->fetch();
    } catch (PDOException $ex) {
      echo $ex;
    }
    return $user;
  }
}
