<?php
/**
 * Created by PhpStorm.
 * User: jahir
 * Date: 11/6/2017
 * Time: 4:07 PM
 */

namespace LaracastDP;


class VeggieSub extends Sub
{

    function addTopping()
    {
        var_dump('Veggie Added.');

        return $this;
    }
}