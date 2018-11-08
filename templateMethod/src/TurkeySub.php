<?php

namespace App;

class TurkeySub extends Sub
{
    public function addPrimaryToppings()
    {
        echo 'add some turkey' . PHP_EOL;
        return $this;
    }
}