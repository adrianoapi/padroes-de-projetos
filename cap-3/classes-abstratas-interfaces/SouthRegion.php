<?php

include_once 'IAbstract.php';

class SouthRegion extends IAbstract
{

    //Deve retornar um valor decimal
    protected function giveCost()
    {
        return 512.00;
    }

    //Deve retornar uma string
    protected function giveCity()
    {
        return "Moose Breath";
    }

}
