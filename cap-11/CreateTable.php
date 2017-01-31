<?php

include_once('UniversalConnect.php');

class CreateTable
{

    private $tableMaster;
    private $hookup;

    public function __construct()
    {
        $this->tableMaster = "proxyLog";
        $this->hookup = UniversalConnect::doConnect();
        $drop = "DROP TABLE IF EXISTS $this->tableMaster";
        if ($this->hookup->query($drop) === true) {
            printf("Old table %s has been dropped.<br/>", $this->tableMaster);
        }
        $this->hookup->query('use lab_padroes_projetos');
        $sql = "CREATE TABLE $this->tableMaster (uname NVARCHAR(15), pw NVARCHAR(120)";
        if ($this->hookup->query($sql) === true) {
            echo "Table $this->tableMaster has been created successfully.<br/>";
        }
        $this->hookup->close();
    }

}

$worker = new CreateTable();
