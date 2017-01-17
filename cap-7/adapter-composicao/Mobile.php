<?php

require_once 'IMobileFormat.php';

class Mobile implements IMobileFormat
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
        echo "<link rel='stylesheet' href='../../assets/css/cap-7-adapter-composicao-mobile.css'>";
        echo $this->headClose;
        echo "<h1>Hello, Everyone!</h1>";
    }

    public function formatGraphics()
    {
        echo "<img clss='pixRight' src='../../assets/img/okami.jpg' width='' height='' alt='river'>";
    }

    public function verticalLayout()
    {
        $textFile = "../../assets/files/lorem.text";
        $openText = fopen($textFile, 'r');
        $textInfo = fread($openText, filesize($textFile));
        fclose($openText);
        $this->sampleText = $textInfo;
        echo "<div>" . $this->sampleText . "</div>";
        echo "<p/><div>" . $this->sampleText . "</div>";
    }

    public function closeHTML()
    {
        echo $this->cap;
    }

}
