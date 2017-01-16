<?php

require_once 'IFormat.php';

class Descktop implements IFormat
{

    private $head = "<!doctype html><html><head>";
    private $headClose = NULL .
            "<meta charset='UTF-8'>"
            . "<title>Descktop</title></head><body>";
    private $cap = "</body></html>";
    private $sampleText;

    public function formatCSS()
    {
        echo $this->head;
        echo "<link rel='stylesheet' href='desktop.css'>";
        echo $this->headClose;
        echo "<h1>Hello, Everyone!</h1>";
    }

    public function formatGraphics()
    {
        echo "<img clss='pixRight' src='../../assets/img/okami.jpg' width='' height='' alt='river'>";
    }

    public function horizontalLayout()
    {
        $textFile = "text/lorem.text";
        $openText = fopen($textFile, 'r');
        $textInfo = fread($openText, filesize($textFile));
        fclose($openText);
        $this->sampleText = $textInfo;
    }

    public function close()
    {
        echo $this->cap;
    }

}
