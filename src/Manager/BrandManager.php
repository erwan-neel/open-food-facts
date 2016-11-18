<?php
/**
 * Created by PhpStorm.
 * User: tazo
 * Date: 15/11/2016
 * Time: 23:17
 */

namespace Tazorax\OpenFoodFacts\Manager;

use Tazorax\OpenFoodFacts\Result\BrandsResult;

class BrandManager extends AbtractManager
{
    const API_ROUTE_ALL = '/brands.json';

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function findAll()
    {
        $url = self::API_END_POINT . self::API_ROUTE_ALL;

        /** @var BrandsResult $object */
        $object = self::performCall($url, BrandsResult::class);

        return $object->getBrands();
    }
}
