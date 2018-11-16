<?php


class CustomerIsGold
{
    public function isSatisfiedBy(Customer $customer)
    {
        return $customer->getPlan() == 'gold';
    }
}
