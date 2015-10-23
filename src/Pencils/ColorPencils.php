<?php
/**
 * Created by PhpStorm.
 * User: Volodymyr Kravchuk
 * Date: 23.10.15
 * Time: 0:13
 */

namespace Pencils;

use Bases\InfoInterface;
use Bases\AbstractStationery;
use Bases\PrintFormat;

class ColorPencils extends AbstractStationery implements InfoInterface
{
    use PrintFormat;

    /**
     * @param $quantity
     */
    public function setQuantityInBox($quantity)
    {
        $this->quantityInBox = $quantity;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $textArr = Array (
            'Pensils'=>'brandName',
            'Price'=>'price',
            'Quantity in box'=>'quantityInBox',
            'Quantity in stock'=>'quantityInStock'
        );
        return $this->formatText($textArr);
    }

    protected $quantityInBox = 0;
}