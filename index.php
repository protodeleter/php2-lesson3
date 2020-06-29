<?php

declare(strict_types=1);

use Models\HasPriceInterface;
use Models\Product;
use Models\Service;

require __DIR__ . '/autoload.php';

$view = new View();

$view->products = Product::findAll();
$view->services = Product::findAll();

echo count($view);die;

$view->display(__DIR__ . '/Templates/index.php');
