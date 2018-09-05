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
     * @var DatabaseUtility
     */
    private $database;

    /**
     * @var PricingService
     */
    private $pricingService;

    /**
     * ProductService constructor.
     * @param $pricingService \MyRetail\Services\PricingService
     */
    public function __construct($pricingService)
    {
        $this->database = DatabaseUtility::getDbInstance();
        $this->pricingService = $pricingService;

    }

    /**
     * @return \MongoDB\Model\DatabaseInfoIterator
     */
    public function getDatabases()
    {
        return $this->database->listDatabases();
    }

    /**
     *  Gets all products in the database
     *
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
     *  Gets a single product in the DB by product ID
     * @param $id
     * @return ProductDto
     */
    public function getProduct($id)
    {
        // configure the filter
        $product = null;
        $findFilter = ['id' => $id];

        // fetch the product
        $productBSON = $this->database->getProductsCollection()->findOne($findFilter);

        // instantiate a DTO to send back to the endpoint script
        $productDto = new ProductDto();
        $productDto->id = $productBSON->id;
        $productDto->name = $productBSON->name;
        $productDto->price = $this->getPrice($id);

        return $productDto;
    }

    /**
     *  Fetches the price for a given product ID
     * @param $id
     * @return mixed
     */
    public function getPrice($id)
    {
        return $this->pricingService->getPrice($id);
    }

}