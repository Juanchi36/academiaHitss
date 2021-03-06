<?php

require '../vendor/autoload.php';

use Juanma\Subscription\SubscriberInterface;
use Juanma\Subscription\PlanInterface;

class PlainSubscriber implements SubscriberInterface
{
    private $email;
    private $plan = null;
    
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
        
    }
    public function subscribe(PlanInterface $plan)
    {
        $this->plan = $plan;
    }
    public function cancel()
    {
        $this->plan = null;
    }
    public function getPlan(): PlanInterface
    {
        return $this->plan;
        
    }
}