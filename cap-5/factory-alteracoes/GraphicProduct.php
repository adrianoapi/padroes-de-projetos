<?php

include_once 'Product.php';

class GraphicProduct implements Product
{

    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = "<!doctype html><html><head><meta charset='UTF-8' />";
        $this->mfgProduct .= "<title>Map Factory</title>";
        $this->mfgProduct .= "</head><body>";
        $this->mfgProduct .= "<img src = 'map.jpg' width='700' height='500' />";
        $this->mfgProduct .= "</body></html>";
        return $this->mfgProduct;
    }

}