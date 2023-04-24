<?php
namespace Database;

use PDO;
use PDOException;

class Connection 
{
  private $connection;

  public function __construct()
  {
    $dsn = 'mysql:host=localhost;dbname=Exame';
    $user = 'root';
    $password = '32237130';
    try {
      $this->connection = new PDO($dsn, $user, $password);
    } catch (PDOException $Expection) {
      echo $Expection;
    }
  }

  public function getConnection()
  {
    return $this->connection;
  }
}
