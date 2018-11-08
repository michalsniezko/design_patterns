<?php

namespace App;

class VeggieSub extends Sub
{
    public function addPrimaryToppings()
    {
        echo 'add some veggies' . PHP_EOL;
        return $this;
    }
}