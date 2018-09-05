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

$productService = new ProductService();

$products = $productService->getProducts();

$return = json_encode($products);

print $return;

