<?php

namespace App\Repository;

use Database\Connection;
use PDO;
use PDOException;

class MaterialTypeRepository 
{
  private $connection; 
  public function __construct() {
    $this->connection = new Connection();
  }

  public function findAllMaterialType()
  {

    $sql = "select * from material_type;";
    $stmt = $this->connection->getConnection()->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'App\Models\MaterialType');

    try {
      $stmt->execute();
      $material = $stmt->fetchAll();
    } catch (PDOException $ex) {
      echo $ex;
    }

    return $material;

  }
}
