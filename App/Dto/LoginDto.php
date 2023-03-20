<?php

namespace App\Dto;

class LoginDto 
{
  public readonly string $name;
  public readonly string $password;

  public function __construct(string $name, string $password)
  {
    $this->name = strtolower($name);
    $this->password = $password;
  }

}
