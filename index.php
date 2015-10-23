<?php
/**
 * Created by PhpStorm.
 * User: Volodymyr Kravchuk
 * Date: 22.10.15
 * Time: 23:11
 */

require_once 'vendor/autoload.php';

use Copybooks\Copybook;
use Pencils\Pencil;
use Pencils\ColorPencils;
use Rulers\Ruler;

$greyPencil = new Pencil();
$greyPencil->setBrand('China');
$greyPencil->setPrice(1);
$greyPencil->addToStock(1500);

$ColPencils = new ColorPencils();
$ColPencils->setBrand('GoodCompany');
$ColPencils->setquantityInBox(12);
$ColPencils->setPrice(8);
$ColPencils->addToStock(500);

$bigCopybook = new Copybook();
$bigCopybook->setBrand('Kyiv');
$bigCopybook->setPatternType('line');
$bigCopybook->setPagesQuantity(96);
$bigCopybook->setPrice(10);
$bigCopybook->addToStock(100);

$simpleRuler = new Ruler();
$simpleRuler->setBrand('Minsk');
$simpleRuler->setLength(30);
$simpleRuler->setPrice(2);
$simpleRuler->addToStock(80);

echo $greyPencil;
echo $ColPencils;
echo $bigCopybook;
echo $simpleRuler;