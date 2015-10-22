<?php
/**
 * Created by PhpStorm.
 * User: Volodymyr Kravchuk
 * Date: 23.10.15
 * Time: 0:13
 */

namespace Pencils;

use Bases\Stationery;

class Pencil extends Stationery
{
    public function __toString(){
        $info = "<p>Pencil \"" . $this->brandName . "\":</p>\n";
        $info .= "Price: " . $this->price . "$<br>\n";
        $info .= "Count in stock: " . $this->countInStock . "<br>\n";
        return $info;
    }
}