<?php

abstract class IAbstract
{

    //Proriedade disponível a todas as implementações
    protected $valueNow;

    /* Todas as implementaçãoes devem incluir os 2 métodos a seguir: */

    //Deve retornar um valor decimal
    abstract protected function giveCost();

    //Deve retornar uma string
    abstract protected function giveCity();

    //Esta função concreta está disponível a todas as implementações da classe
    //sobrescrita do conteúdo
    public function displayNow()
    {
        $stringCost = $this->giveCost();
        $stringCost = (string) $stringCost;
        $allTogether = ("Cost: $" . $stringCost . " for " . $this->giveCity());
        return $allTogether;
    }

}
