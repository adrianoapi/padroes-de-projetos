<?php

include_once ('IProduct.php');

class CitrusStore implements IProduct
{

    public function apples()
    {
        return "CitrusStore sez--we do not sell apples.<br/>";
    }

    public function oranges()
    {
        return "CitrusStore sez--we have citrus fruit.";
    }

}
