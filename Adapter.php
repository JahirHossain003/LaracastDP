<?php

include 'vendor\autoload.php';
use LaracastDP\BookInterface;
use LaracastDP\Book;
use LaracastDP\eReaderAdapter;

class Person{

    public function read(BookInterface $book){
        $book->open();
        $book->turnPage();
    }
}

(new Person)->read(new eReaderAdapter(new \LaracastDP\Nook()));