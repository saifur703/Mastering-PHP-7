<?php

class RGB
{
    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode = "")
    {
        $this->color = ltrim($colorCode, "#");
        $this->generateColor();
    }


    public function getColor()
    {
        return $this->color;
    }

    public function getRGBColor()
    {
        return array($this->red, $this->green, $this->blue);
    }


    public function readRGBColor()
    {
        echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
    }

    public function setColor($colorCode = "")
    {
        return $this->color = ltrim($colorCode, "#");
        $this->generateColor();
    }

    private function generateColor()
    {
        if ($this->color) {
            // $colors = sscanf($this->color, "%2x%2x%2x");
            // $this->red = $colors[0];
            // $this->green = $colors[1];
            // $this->blue = $colors[2];

            list($this->red, $this->green, $this->blue) = sscanf($this->color, "%2x%2x%2x");
        } else {
            list($this->red, $this->green, $this->blue) = array(0, 0, 0);
        }
    }

    public function getRed()
    {
        return $this->red;
    }
    public function getGreen()
    {
        return $this->green;
    }
    public function getBlue()
    {
        return $this->blue;
    }
}
$myColor = new RGB("#FF00FF");
$myColor->readRGBColor();