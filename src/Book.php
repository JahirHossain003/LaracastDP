<?php
/**
 * Created by PhpStorm.
 * User: jahir
 * Date: 11/6/2017
 * Time: 2:41 PM
 */

namespace LaracastDP;


class Book implements BookInterface
{

    public function open(){
        var_dump('opening the paper book.');
    }

    public function turnPage(){
        var_dump('turning the page of the paper book');
    }
}