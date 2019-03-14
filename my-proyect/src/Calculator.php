<?php

namespace MixPlay\Math;

class Calculator 
{
  
  protected $result = 0;

  public function __construct($intial = 0)
  {
    $this->result = $intial;
  }

  public function getResult ()
  {
    return $this->result;
  }

  public function add ($x = 0)
  {
    $this->result += $x;
    return $this;  
  }

  public function substract ($x = 0)
  {
    $this->result -= $x;
    return $this;
  }

  public function multiply ($x = 0)
  {
    $this->result += $x;
    return $this;
  }

  public function divide ($x = 1)
  {
    if ($x == 0) {
      throw new \InvalidArgumentException('No se puede dividir por cero');
    }
    $this->result /= $x;
    return $this;
  }

}
