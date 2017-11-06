<?php
/**
 * Created by PhpStorm.
 * User: jahir
 * Date: 11/6/2017
 * Time: 2:49 PM
 */

namespace LaracastDP;


class Kindle implements eReader
{
    public function turnOn(){

        var_dump('Turn the kindle On');
    }

    public function pressNextButton(){

        var_dump('Press the next button');

    }
}