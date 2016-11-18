<?php
/**
 * Created by PhpStorm.
 * User: tazo
 * Date: 13/11/2016
 * Time: 18:15
 */

namespace Tazorax\OpenFoodFacts;

use Tazorax\OpenFoodFacts\Manager\BrandManager;
use Tazorax\OpenFoodFacts\Manager\ProductManager;
use Tazorax\OpenFoodFacts\Model\Product;

class OpenFoodFactsClient
{
    /**
     * @param $ean13
     * @return Product
     * @throws Exception
     */
    public static function getProductByEAN13($ean13)
    {
        $manager = new ProductManager();
        return $manager->findOneByEAN13($ean13);
    }

    public static function getBrands()
    {
        $manager = new BrandManager();
        return $manager->findAll();
    }
}
