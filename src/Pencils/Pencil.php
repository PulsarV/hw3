<?php
/**
 * Created by PhpStorm.
 * User: Volodymyr Kravchuk
 * Date: 23.10.15
 * Time: 0:13
 */

namespace Pencils;

use Bases\Stationery;
use Pensils\PensilsInterface;

class Pencil extends Stationery implements PensilsInterface
{
    public function __toString(){
        $info = "<p>Pencil \"" . $this->brandName . "\":</p>\n";
        $info .= "Price: " . $this->price . "$<br>\n";
        $info .= "Quantity in stock: " . $this->quantityInStock . "<br>\n";
        return $info;
    }
}