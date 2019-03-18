<?php

require '../vendor/autoload.php';

use Juanma\Subscription\PlanInterface;

class GiftPlan implements PlanInterface
{
    private $name = 'Gift Plan';
    private $period = '30 days';
    private $price = 20;

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