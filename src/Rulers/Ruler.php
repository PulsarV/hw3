<?php
/**
 * Created by PhpStorm.
 * User: Volodymyr Kravchuk
 * Date: 23.10.15
 * Time: 18:16
 */

namespace Rulers;

use Bases\InfoInterface;
use Bases\AbstractStationery;
use Bases\PrintFormat;

class Ruler extends AbstractStationery implements InfoInterface
{
    use PrintFormat;

    /**
     * @param $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $textArr = Array (
            'Ruler'=>'brandName',
            'Length'=>'length',
            'Price'=>'price',
            'Quantity in stock'=>'quantityInStock'
        );
        return $this->formatText($textArr);
    }

    private $length = 0;
}