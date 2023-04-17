<?php

namespace App\Models;

class MaterialType 
{
  private int $id;
  private string $typeName;


  public function getId(): int
  {
    return $this->id;
  }

  public function setId($id): void
  {
    $this->id = $id;
  }

  public function getMaterialType(): string
  {
    return $this->typeName;
  }

  public function setMaterialType($materialType): void
  {
    $this->typeName = $materialType;
  }
}
