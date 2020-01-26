<?php

class Client
{
    public $name;

    public $methods = [];

    public function __construct($name)
    {
        $this->name = $name;
    }
}
