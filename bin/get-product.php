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
use MyRetail\Services\PricingService;

$pricingService = new PricingService();
$productService = new ProductService($pricingService);



$productId = $_GET['productId'];

$product = $productService->getProduct($productId);

$return =  json_encode($product);

print $return;
