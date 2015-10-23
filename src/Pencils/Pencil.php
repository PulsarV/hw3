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

class Pencil extends AbstractStationery implements InfoInterface
{
    use PrintFormat;

    /**
     * @return string
     */
    public function __toString()
    {
        $textArr = Array (
            'Pensil'=>'brandName',
            'Price'=>'price',
            'Quantity in stock'=>'quantityInStock'
        );
        return $this->formatText($textArr);
    }
}