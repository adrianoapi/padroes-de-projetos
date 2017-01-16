<?php

require_once 'EuroAdapter.php';
require_once 'DollarCalc.php';

class Client
{

    private $requestNow;
    private $dollarRequest;

    public function __construct()
    {
        $this->requestNow = new EuroAdapter();
        $this->dollarRequest = new DollarCalc();
        $euro = "&#8364;";
        echo "Euros: $euro" . $this->makeAdapterRequest($this->requestNow) . "<br/>";
        echo "Dollars: $" . $this->makeDollarRequest($this->dollarRequest);
    }

    private function makeAdapterRequest(ITarget $req)
    {
        #Erro tutorial
        #return $req->requesCalc(40, 50);
        return $this->requestNow->requestCalc(40, 50);
    }

    private function makeDollarRequest(DollarCalc $req)
    {
        #Erro turorial
        #return $req->requesCalc(40, 50);
        return $this->dollarRequest->requestCalc(40, 50);
    }

}

$worker = new Client();
