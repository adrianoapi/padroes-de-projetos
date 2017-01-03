<?php

include_once 'ProtecVis.php';

class ConcreteProtect extends ProtecVis
{

    function __construct()
    {
        $this->countMoney();
    }

    protected function countMoney()
    {
        $this->wage = "Your hourly wage is $";
        echo $this->wage . $this->setHourly(36);
    }

}

$worker = new ConcreteProtect();
