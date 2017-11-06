<?php
/**
 * Created by PhpStorm.
 * User: jahir
 * Date: 11/6/2017
 * Time: 3:01 PM
 */

namespace LaracastDP;


class Nook implements eReader
{

    public function turnOn()
    {
        var_dump('Turn on Nook');
    }

    public function pressNextButton()
    {
        var_dump('Press Next button on Nook');
    }
}