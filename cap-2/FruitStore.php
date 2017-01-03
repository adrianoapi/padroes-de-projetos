<?php

include_once ('IProduct.php');

class FruitStore implements IProduct
{

    public function apples()
    {
        return "FritSstore sez--we heave apples.<br/>";
    }

    public function oranges()
    {
        return "FritSstore sez--we have no citrus fruit.<br/>";
    }

}
