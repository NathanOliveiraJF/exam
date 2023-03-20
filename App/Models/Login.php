<?php

namespace App\Models;

class Login
{
  private int $id;
  private string $name;
  private string $password;
  private int $role_id;

  public function getId(): int
  {
    return $this->id;
  }

  public function setId(int $id): void 
  {
    $this->id = $id;
  }

  public function getName(): string 
  {
    return $this->name;
  }

  public function setName(int $name): void
  {
    $this->name = $name;
  }

  public function getPassword(): string 
  {
    return $this->password;
  }

  public function setPassword(int $password): void
  {
    $this->password = $password;
  }

  public function getRoleId(): int 
  {
    return $this->role_id;
  }

  public function setRoleId(int $roleId): void
  {
    $this->role_id = $roleId;
  }



}
