<?php

abstract class ProtecVis
{

    abstract protected function countMoney();

    protected $wage;

    protected function setHourly($hourly)
    {
        $money = $hourly;
        return $money;
    }

}
