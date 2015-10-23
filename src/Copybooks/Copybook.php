<?php
/**
 * Created by PhpStorm.
 * User: Volodymyr Kravchuk
 * Date: 23.10.15
 * Time: 16:48
 */

namespace Copybooks;

use Bases\AbstractStationery;
use Bases\InfoInterface;
use Bases\PrintFormat;

class Copybook extends AbstractStationery implements InfoInterface
{
    use PrintFormat;

    /**
     * @param $pattern
     */
    public function setPatternType($pattern)
    {
        if (!in_array($pattern, Array('line', 'square'))) {
            echo 'Wrong pattern type: ' . $pattern;
            exit;
        }
        $this->pattern = $pattern;
    }

    /**
     * @return string
     */
    public function getPatternType()
    {
        return $this->pattern;
    }

    /**
     * @param $quantity
     */
    public function setPagesQuantity($quantity)
    {
        $this->pageQuantity = $quantity;
    }

    /**
     * @return int
     */
    public function getPageQuantity()
    {
        return $this->pageQuantity;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $textArr = Array (
            'Copybook'=>'brandName',
            'Price'=>'price',
            'Pattern type'=>'pattern',
            'Page quantity'=>'pageQuantity',
            'Quantity in stock'=>'quantityInStock'
        );
        return $this->formatText($textArr);
    }

    protected $pattern = '';
    protected $pageQuantity = 0;
}