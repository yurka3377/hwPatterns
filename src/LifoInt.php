<?php

namespace App;

class LifoInt
{
    private  $lifo;

    public function __construct(Lifo $lifo)
    {
        $this->lifo = $lifo;
    }

    public function push(int $item)
    {
        $this->lifo->push($item);
    }

    public function pop(): int
    {
        return $this->lifo->pop();
    }
}