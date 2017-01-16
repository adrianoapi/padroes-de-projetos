<?php

require_once 'IAcmePrototype.php';

class Marketing extends IAcmePrototype
{

    const UNIT = "Marketing";

    private $sales = "sales";
    private $promotion = "promotion";
    private $strategic = "strategic planning";

    public function setDept($orgCode)
    {
        switch ($orgCode):
            case 101:
                $this->dept = $this->sales;
                break;
            case 102:
                $this->dept = $this->promotion;
                break;
            case 103:
                $this->dept = $this->strategic;
            default :
                $this->dept = "Unrecognized Marketing";
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
