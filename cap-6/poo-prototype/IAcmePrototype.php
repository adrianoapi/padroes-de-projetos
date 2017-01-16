<?php

abstract class IAcmePrototype
{

    protected $name;
    protected $id;
    protected $employeePic;
    protected $dept;

    //Departamento
    abstract function setDept($orgCode);

    abstract function getDept();

    //Nome
    public function getName()
    {
        return $this->name;
    }

    public function setName($emName)
    {
        $this->name = $emName;
    }

    //ID
    public function setId($emId)
    {
        $this->id = $emId;
    }

    public function getId()
    {
        return $this->id;
    }

    //Foto do funcionário
    public function setPid($ePic)
    {
        $this->employeePic = $ePic;
    }

    public function getPic()
    {
        return $this->employeePic;
    }

    abstract function __clone();
}
