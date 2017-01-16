<?php

require_once 'IAcmePrototype.php';

class Management extends IAcmePrototype
{

    const UNIT = "Management";

    private $research = "research";
    private $plan = "plan";
    private $operations = "operations";

    public function setDept($orgCode)
    {
        switch ($orgCode):
            case 201:
                $this->dept = $this->research;
                break;
            case 202:
                $this->dept = $this->plan;
                break;
            case 203:
                $this->dept = $this->operations;
            default :
                $this->dept = "Unrecognized Management";
        endswitch;
    }

    public function getDept()
    {
        return $this->dept;
    }

    function __clone()
    {
        
    }

}
