<?php
namespace Database;

use PDO;
use PDOException;

class Connection 
{
  private $connection;

  public function __construct()
  {
    $dsn = 'mysql:host=;dbname=';
    $user = '';
    $password = '';
    try {
      $this->connection = new PDO($dsn, $user, $password);
    } catch (PDOException $Expection) {
      echo $Expection;
    }
  }

  public function getConnection(): PDO
  {
    return $this->connection;
  }
}
