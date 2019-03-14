<?php

  require '../vendor/autoload.php';

  use MixPlay\Math\Calculator;
  use MixPlay\Math\ScientificCalculator;
  use MixPlay\Math\CalculatorFactory;


  //$calc = new ScientificCalculator(0);


  try {

    echo CalculatorFactory::$COUNTER;

    $calc = CalculatorFactory::createCalculator(1);
    //$calc = $factory->createCalculator(CalculatorFactory::SCIENTIFIC);
    $calc->add(24)->divide(1)->pow(2);
    
  } catch (\InvalidArgumentException $e){
    echo $e->getMessage();
  }
  
  echo $calc->getResult();
   
  //var_dump($calc);
  
