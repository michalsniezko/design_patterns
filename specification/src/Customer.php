<?php

class Customer
{
    protected $plan;

    public function __construct($plan)
    {
        $this->plan = $plan;
    }

    /**
     * @return mixed
     */
    public function getPlan()
    {
        return $this->plan;
    }
}