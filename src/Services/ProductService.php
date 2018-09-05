<?php
/**
 * Created by PhpStorm.
 * User: lopan
 * Date: 9/3/18
 * Time: 2:45 PM
 */

namespace MyRetail\Services;

use MyRetail\Database\DatabaseUtility;
use MyRetail\Dto\ProductDto;

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
        $productsArray = array();

        $productsBSON = $this->database->getProductsCollection()->find()->toArray();

        foreach ($productsBSON as $product) {
            $productDto = new ProductDto();
            $productDto->id = $product->id;
            $productDto->name = $product->name;
            $productsArray[] = $productDto;
        }

        return $productsArray;
    }

    /**
     * @param $id
     * @return ProductDto
     */
    public function getProduct($id)
    {
        $product = null;
        $findFilter = ['id' => $id];

        $productBSON = $this->database->getProductsCollection()->findOne($findFilter);

        $productDto = new ProductDto();
        $productDto->id = $productBSON->id;
        $productDto->name = $productBSON->name;

        return $productDto;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getPrice($id)
    {
        return $price;
    }

}