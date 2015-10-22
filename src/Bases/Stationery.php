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
    public function getCount()
    {
        return $this->countInStock;
    }
    public function addToStock($count)
    {
        $this->countInStock += $count;
    }
    public function getFromStock($count)
    {
        $this->countInStock -= $count;
    }
    protected $brandName = '';
    protected $price = 0;
    protected $countInStock = 0;

}