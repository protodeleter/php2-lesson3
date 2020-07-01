<?php

declare(strict_types=1);

use Models\HasPriceInterface;
use Models\Product;
use Models\Service;
use Models\News;
use App\Config;
use Models\Authors;

require __DIR__ . '/autoload.php';

$view = new View();

//$view->products = Product::findAll();

//var_dump ($view->news);
//echo count($view);die;


$view->news = News::getNewsWithAuthors ();

$view->display(__DIR__ . '/Templates/index.php');