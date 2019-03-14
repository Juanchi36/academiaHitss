<?php

namespace MixPlay\Math;

class ScientificCalculator extends Calculator
{
  public function __construct($x = 0)
  {
    parent::__construct($x);
  }

  public function pow($x) : Calculator
  {
    $this->result = $this->result ** $x;
    return $this;

  }


}