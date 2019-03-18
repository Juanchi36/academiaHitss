<?php

namespace Juanma\Subscription;

interface SubscriberInterface 
{
    public function setEmail(string $email);
    public function getEmail();
    public function subscribe(PlanInterface $plan);
    public function cancel();
    public function getPlan(): PlanInterface;
}