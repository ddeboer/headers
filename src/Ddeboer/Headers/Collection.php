<?php

namespace Ddeboer\Headers;

class Collection implements \IteratorAggregate
{
    public function __construct(array $data = null)
    {
        $this->data = $data;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }

    public function get($key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }
}