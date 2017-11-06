<?php
/**
 * Created by PhpStorm.
 * User: jahir
 * Date: 11/6/2017
 * Time: 2:57 PM
 */

namespace LaracastDP;


class eReaderAdapter implements BookInterface
{
    private $reader;


    /**
     * eReaderAdapter constructor.
     * @param eReader $reader
     */
    function __construct(eReader $reader)
    {
        $this->reader = $reader;
    }

    public function open()
    {
        $this->reader->turnOn();
    }

    public function turnPage()
    {
        $this->reader->pressNextButton();
    }
}