<?php
/**
 * Created by PhpStorm.
 * User: Volodymyr Kravchuk
 * Date: 23.10.15
 * Time: 0:13
 */

namespace Pencils;

use Bases\Stationery;

class ColorPencil extends Stationery
{
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function __toString(){
        $info = "<p>Color pencil \"" . $this->brandName . "\":</p>\n";
        $info .= "Color: " . $this->color . "<br>\n";
        $info .= "Price: " . $this->price . "$<br>\n";
        $info .= "Count in stock: " . $this->countInStock . "<br>\n";
        return $info;
    }
    protected $color;
}