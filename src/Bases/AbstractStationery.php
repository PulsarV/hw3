<?php
/**
 * Created by PhpStorm.
 * User: Volodymyr Kravchuk
 * Date: 22.10.15
 * Time: 23:13
 */

namespace Bases;

abstract class AbstractStationery
{
    /**
     * @param $brandName
     */
    public function setBrand($brandName)
    {
        $this->brandName = $brandName;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brandName;
    }

    /**
     * @param $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantityInStock;
    }

    /**
     * @param $quantity
     */
    public function addToStock($quantity)
    {
        $this->quantityInStock += $quantity;
    }

    /**
     * @param $quantity
     */
    public function getFromStock($quantity)
    {
        $this->quantityInStock -= $quantity;
    }

    protected $brandName = '';
    protected $price = 0;
    protected $quantityInStock = 0;

}