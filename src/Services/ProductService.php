<?php
/**
 * Created by PhpStorm.
 * User: lopan
 * Date: 9/3/18
 * Time: 2:45 PM
 */

namespace MyRetail\Services;

use MyRetail\Database\DatabaseUtility;

/**
 * Class ProductService
 * @package MyRetail
 */
class ProductService
{

    /**
     * @var
     */
    private $database;

    /**
     * ProductService constructor.
     */
    public function __construct()
    {
        $this->database = DatabaseUtility::getDbInstance();

    }

    public function getDatabases()
    {
        return $this->database->listDatabases();
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        $products = ['product1', 'product2', 'product3'];

        return $products;
    }

}