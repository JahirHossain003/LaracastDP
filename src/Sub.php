<?php
/**
 * Created by PhpStorm.
 * User: jahir
 * Date: 11/6/2017
 * Time: 4:12 PM
 */

namespace LaracastDP;


abstract class Sub
{
    public function make(){
        return $this->addBread()
            ->addLettuce()
            ->addTopping()
            ->addSauce();
    }

    private function addBread()
    {
        var_dump('Bread Added.');

        return $this;
    }

    private function addLettuce()
    {
        var_dump('Lettuce Added.');

        return $this;
    }

    private function addSauce()
    {
        var_dump('Sauce Added.');

        return $this;
    }

    abstract function addTopping();

}