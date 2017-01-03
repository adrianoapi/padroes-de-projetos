<?php

include_once ('OneTrickAbstract.php');

class OneTrickConcrete extends OneTrick
{

    public function trick($watever)
    {
        $this->storeHere = $watever;
        return $watever . $this->storeHere;
    }

}

$worker = new OneTrickConcrete();
echo $worker->trick("From an abstract origin...");