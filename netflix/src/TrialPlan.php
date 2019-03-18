<?php

require '../vendor/autoload.php';

use Juanma\Subscription\PlanInterface;

class TrialPlan implements PlanInterface
{
    private $name = 'Trial Plan';
    private $period = '15 days';
    private $price = 0;
    
    public function  getName()
    {
        return $this->name;
    }

    public function  getPeriod()
    {
        return $this->period;
    }

    public function  getPrice()
    {
        return $this->price;
    }
}
