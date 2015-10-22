<?php
/**
 * Created by PhpStorm.
 * User: Volodymyr Kravchuk
 * Date: 22.10.15
 * Time: 23:11
 */

require_once 'vendor/autoload.php';

//use Notebooks\Notebook;
use Pencils\Pencil;
use Pencils\ColorPencil;
//use Pens\Pen;
//use Rulers\Ruler;

$newPencil = new Pencil();
$newPencil->setBrand('NoName');
$newPencil->setPrice(1);
$newPencil->addToStock(1500);

echo $newPencil;

$newColorPencil = new ColorPencil();
$newColorPencil->setBrand('NoName1');
$newColorPencil->setColor('Red');
$newColorPencil->setPrice(3);
$newColorPencil->addToStock(1500);

echo $newColorPencil;
