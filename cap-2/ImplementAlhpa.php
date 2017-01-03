<?php

include_once ('IMethodHolder.php');

class ImplementAlhpa implements IMethodHolder
{

    public function getInfo($info)
    {
        echo "This is NEWS! " . $info . "<br/>";
    }

    public function sendInfo($info)
    {
        return $info;
    }

    public function calculate($first, $second)
    {
        $calculed = $first * $second;
        return $calculed;
    }

    public function useMethods()
    {
        $this->getInfo("The sky is falling...");
        echo $this->sendInfo("Vote for Senador Snort!") . "<br/>";
        echo "You make $" . $this->calculate(20, 15) . " in your part-time job <br/>";
    }

}

$worker = new ImplementAlhpa();
$worker->useMethods();
