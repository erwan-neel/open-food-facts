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
     * @param $bar_code
     * @return Product
     * @throws Exception
     */
    public static function getProductByBarCode($bar_code)
    {
        $manager = new ProductManager();
        return $manager->findOneByBarCode($bar_code);
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public static function getBrands()
    {
        $manager = new BrandManager();
        return $manager->findAll();
    }
}
