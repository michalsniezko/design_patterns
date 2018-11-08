<?php
/**
 * Created by PhpStorm.
 * User: misn
 * Date: 08.11.2018
 * Time: 12:38
 */

namespace Acme;


class Kindle implements eReaderInterface
{
    public function turnOn()
    {
        var_dump('turn the Kindle on');
    }

    public function pressNextButton()
    {
        var_dump('press the next button on the Kindle');
    }
}