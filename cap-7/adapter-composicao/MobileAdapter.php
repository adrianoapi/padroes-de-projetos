<?php

require_once 'IFormat.php';
require_once 'Mobile.php';

class MobileAdapter implements IFormat
{

    private $mobile;

    public function __construct(IMobileFormat $mobileView)
    {
        $this->mobile = $mobileView;
    }
    
    public function formatCSS()
    {
        $this->mobile->formatCSS();
    }
    
    public function formatGraphics()
    {
        $this->mobile->formatGraphics();
    }
    
    public function horizontalLayout()
    {
        $this->mobile->verticalLayout();
    }

}
