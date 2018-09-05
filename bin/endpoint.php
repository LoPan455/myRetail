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
$return = array();

$myClass = new MyClass();
$productService = new ProductService();
$products = $productService->getProducts();
json_encode($products);
print $products;

