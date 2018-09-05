<?php
/**
 * Created by PhpStorm.
 * User: tjohander
 * Date: 9/5/18
 * Time: 4:19 PM
 */
require_once('bootstrap.php');

use MyRetail\MyClass;
use MyRetail\Services\ProductService;

$productService = new ProductService();

$product = $productService->getProduct('123456789');

$return =  json_encode($product);

print $return;
