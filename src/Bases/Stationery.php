<?php
/**
 * Created by PhpStorm.
 * User: Volodymyr Kravchuk
 * Date: 22.10.15
 * Time: 23:13
 */

namespace Bases;

abstract class Stationery
{
    public function setBrand($brandName)
    {
        $this->brandName = $brandName;
    }
    public function getBrand()
    {
        return $this->brandName;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getQuantity()
    {
        return $this->countInStock;
    }
    public function addToStock($quantity)
    {
        $this->quantityInStock += $quantity;
    }
    public function getFromStock($quantity)
    {
        $this->quantityInStock -= $quantity;
    }
    protected $brandName = '';
    protected $price = 0;
    protected $quantityInStock = 0;

}