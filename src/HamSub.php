<?php
/**
 * Created by PhpStorm.
 * User: jahir
 * Date: 11/6/2017
 * Time: 4:15 PM
 */

namespace LaracastDP;


class HamSub extends Sub
{

    function addTopping()
    {
        var_dump('Meat Added.');

        return $this;
    }
}