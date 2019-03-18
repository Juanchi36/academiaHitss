<?php

namespace Juanma\Subscription;

interface SubscriptionInterface
{
    public function getCreateDate();
    public function getExpirationDate();
    public function setSubscriber(SubscriberInterface $s);
    public function setPlan(PlanInterface $s);
}