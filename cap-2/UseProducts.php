<?php

include_once ('FruitStore.php');
include_once ('CitrusStore.php');

class UseProducts
{

    public function __construct()
    {
        $appleSource = new FruitStore();
        $orangeJuice = new CitrusStore();
        $this->doInterface($appleSource);
        $this->doInterface($orangeJuice);
    }
    
    public function doInterface(IProduct $product){
        echo $product->apples();
        echo $product->oranges();
    }

}
$worker = new UseProducts();