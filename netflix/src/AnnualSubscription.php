<?php

require '../vendor/autoload.php';

use Juanma\Subscription\SubscriptionInterface;
use Juanma\Subscription\SubscriberInterface;
use Juanma\Subscription\PlanInterface;

class AnnualSubscription implements SubscriptionInterface
{
    private $createDate;
    private $expirationDate;
    private $subscriber;
    private $plan;

    public function getCreateDate()
    {
        return $this->createDate;
    }
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
    public function setSubscriber(SubscriberInterface $subscriber)
    {
        $this->subscriber = $subscriber;
    }
    public function setPlan(PlanInterface $plan)
    {
        $this->plan = $plan;
    }
}