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
use Pencils\ColorPencils;
use Pensils\PensilsInterface;
//use Pens\Pen;
//use Rulers\Ruler;

$newPencil = new Pencil();
$newPencil->setBrand('NoName');
$newPencil->setPrice(1);
$newPencil->addToStock(1500);

echo $newPencil;

$newColorPencils = new ColorPencils();
$newColorPencils->setBrand('NoName1');
$newColorPencils->setquantityInBox(12);
$newColorPencils->setPrice(8);
$newColorPencils->addToStock(500);

echo $newColorPencils;
