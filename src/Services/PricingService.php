<?php
/**
 * Created by PhpStorm.
 * User: tjohander
 * Date: 9/5/18
 * Time: 5:20 PM
 */

namespace MyRetail\Services;

use MyRetail\Database\DatabaseUtility;

class PricingService
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

    /**
     *  Gets the price for a given product ID
     * @param $id
     * @return mixed
     */
    public function getPrice($id)
    {
        $price = null;
        $findFilter = ['id' => $id];

        $priceBSON = $this->database->getPricingCollection()->findOne($findFilter);

        return $priceBSON->price;
    }

}