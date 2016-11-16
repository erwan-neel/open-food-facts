<?php
/**
 * Created by PhpStorm.
 * User: tazo
 * Date: 15/11/2016
 * Time: 21:00
 */

namespace Tazorax\OpenFoodFacts\Manager;

use Tazorax\OpenFoodFacts\Exception;
use Tazorax\OpenFoodFacts\Result\ProductResult;

class ProductManager extends AbtractManager
{
    const API_ROUTE_ONE = '/product/{id}.json';

    public function findOneByEAN13($code)
    {
        $url = str_replace('{id}', $code, self::API_END_POINT . self::API_ROUTE_ONE);

        /** @var ProductResult $object */
        $object = self::performCall($url, 'Tazorax\OpenFoodFacts\Result\ProductResult');

        if ($object->getStatus() == ProductResult::PRODUCT_FOUND) {
            return $object->getProduct();
        } else {
            throw new Exception('Product not found');
        }
    }
}
