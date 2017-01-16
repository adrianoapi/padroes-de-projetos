<?php

class HelloClone
{

    private $buildInConstructor;

    public function __construct()
    {
        echo "Hello, clone!<br/>";
        $this->buildInConstructor = "Construtor creation<br/>";
    }

    public function doWork()
    {
        echo $this->buildInConstructor;
        echo "I'm doing the work!</p>";
    }

}

//Executa o construtor
$original = new HelloClone();
$original->doWork();

//Clonagem não executa o construtor
$cloneIt = clone $original;
$cloneIt->doWork();
