<?php

function iter(iterable $iterable) {
    foreach ($iterable as $value) {
        echo $value, PHP_EOL;
    } 
}

//iter(['one', 'two', 'three']);
//iter("asdf");


class Test implements \IteratorAggregate
{
    public function getIterator()
    {
        return new \ArrayIterator(range(1, 10));
    }
}

iter(new Test);
//iter(1);
