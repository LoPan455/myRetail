<?php
/**
 * Created by PhpStorm.
 * User: lopan
 * Date: 9/3/18
 * Time: 2:27 PM
 */

require_once('bootstrap.php');

use MyRetail\MyClass;
use MyRetail\Services\ProductService;

$variable1 = 'Hello World';

$myClass = new MyClass();
$productService = new ProductService();
//$products = $productService->getProducts();
$dbs = $productService->getDatabases();

echo $myClass->getTitle() . PHP_EOL;
echo $variable1 . PHP_EOL;
//var_dump($products);
var_dump($dbs);