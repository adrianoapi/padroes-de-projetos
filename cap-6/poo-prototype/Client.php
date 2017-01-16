<?php

function __autoload($class_name)
{
    include $class_name . '.php';
}

class Client
{

    private $market;
    private $manage;
    private $engineer;

    public function __construct()
    {
        $this->makeConPro();
        $Tess = clone $this->market;
        $this->setEmployee($Tess, "Tess Smith", 101, "ts101-1234", "market.jpg");
        $this->showEmployee($Tess);
        $Jacob = clone $this->market;
        $this->setEmployee($Jacob, "Jacob Jonrd", 102, "jj101-2234", "market-2.jpg");
        $this->showEmployee($Jacob);
        $Ricky = clone $this->manage;
        $this->setEmployee($Ricky, "Rick Rodriguez", 203, "rr203-5634", "manage.jpg");
        $this->showEmployee($Ricky);
        $Olivia = clone $this->engineer;
        $this->setEmployee($Olivia, "Olivia Perez", 301, "op301-1278", "enginner.jpg");
        $this->showEmployee($Olivia);
        $John = clone $this->engineer;
        $this->setEmployee($Jacob, "John Jackson", 301, "jj302-1454", "enginner-2.jpg");
        $this->showEmployee($Jacob);
    }

    public function makeConPro()
    {
        $this->market = new Marketing();
        $this->manage = new Management();
        $this->engineer = new Engineering();
    }

    public function showEmployee(IAcmePrototype $employeeNow)
    {
        $px = $employeeNow->getPic();
        echo "<img src=$px width='150' height='150'><br/>";
        echo $employeeNow->getName() . "<br/>";
        echo $employeeNow->getDept() . ": " . $employeeNow::UNIT . "<br/>";
        echo $employeeNow->getId() . "<p/>";
    }

    public function setEmployee(IAcmePrototype $employeeNow, $nm, $dp, $id, $px)
    {
        $employeeNow->setName($nm);
        $employeeNow->setDept($dp);
        $employeeNow->setId($id);
        $employeeNow->setPid("../../assets/img/$px");
    }

}

$worker = new Client();
