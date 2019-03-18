<?php

namespace Juanma\Subscription;

interface PlanInterface
{
    public function  getName();
    public function  getPeriod();
    public function  getPrice();
}
