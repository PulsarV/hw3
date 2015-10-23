<?php
/**
 * Created by PhpStorm.
 * User: Volodymyr Kravchuk
 * Date: 23.10.15
 * Time: 0:13
 */

namespace Pencils;

use Bases\Stationery;

class ColorPencils extends Stationery implements PencilsInterface
{
    public function setQuantityInBox($quantity)
    {
        $this->quantityInBox = $quantity;
    }
    public function __toString(){
        $info = "<p>Color pencils \"" . $this->brandName . "\":</p>\n";
        $info .= "Quantity in box: " . $this->quantityInBox . "<br>\n";
        $info .= "Price: " . $this->price . "$<br>\n";
        $info .= "Quantity in stock: " . $this->quantityInStock . "<br>\n";
        return $info;
    }
    protected $quantityInBox;
}