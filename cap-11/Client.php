<?php

require_once 'UniversalConnect.php';

class Client
{

    private $hookup;

    public function __construct()
    {
        # erro no exemplo do livro
        //$this->hookup = UniversalConnect::doConnect();
        
        # correção
        $this->hookup =  new UniversalConnect();
        return $this->hookup->doConnetc();
    }

}
$worker =  new Client();