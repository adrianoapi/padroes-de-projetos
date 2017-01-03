<?php

interface ISpeed
{

    function fast();

    function cruise();

    function slow();
}

class Jet implements ISpeed
{

    function slow()
    {
        return 120;
    }

    function cruise()
    {
        return 1200;
    }

    function fast()
    {
        return 1500;
    }

}

class Car implements ISpeed
{

    function slow()
    {
        $carSlow = 15;
        return $carSlow;
    }

    function cruise()
    {
        $carCruise = 65;
        return $carCruise;
    }

    function fast()
    {
        $carZoom = 110;
        return $carZoom;
    }

}

$f22 = new Jet();
$jetSolw = $f22->slow();
$jetCruise = $f22->cruise();
$jetFast = $f22->fast();
echo "<br/>My jet can take off at $jetSolw mph and cruises at $jetCruise mph. However, I can crank it up to $jetFast mph if I'm in hurry.<br/>";
$ford = new Car();
$carSolw = $ford->slow();
$carCruise = $ford->cruise();
$carFast = $ford->fast();
echo "<br/>My car can take off at $carSolw mph and cruises at $carCruise mph. However, I can crank it up to $carFast mph if I'm in hurry.<br/>";
