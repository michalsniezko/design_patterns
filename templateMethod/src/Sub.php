<?php

namespace App;

abstract class Sub
{
    public function make()
    {
        return $this->layBread()->addLettuce()->addPrimaryToppings()->addSauces();
    }

    public function layBread()
    {
        echo 'lay down the bread' . PHP_EOL;
        return $this;
    }

    public function addLettuce()
    {
        echo 'add some lettuce' . PHP_EOL;
        return $this;
    }

    public function addSauces()
    {
        echo 'add oil and vinegar' . PHP_EOL;
        return $this;
    }

    protected abstract function addPrimaryToppings();

}