<?php

class PrivateVis
{

    private $money;

    public function __construct()
    {
        $this->money = 200;
        $this->secret();
    }

    public function secret()
    {
        echo $this->money;
    }

}

$worker = new PrivateVis();
