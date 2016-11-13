<?php
/**
 * Created by PhpStorm.
 * User: tazo
 * Date: 13/11/2016
 * Time: 18:15
 */

namespace Tazorax\OpenFoodFacts;

use GuzzleHttp\Client as HTTPClient;
use JMS\Serializer\SerializerBuilder;

class Client
{
    /**
     *
     */
    const END_POINT_FORMAT = 'http://world.openfoodfacts.org/api/v0/product/{ean13}.json';

    /**
     * @var HTTPClient
     */
    static protected $http_client;

    /**
     * @param $ean13
     */
    public static function getProductByEAN13($ean13)
    {
        $url = str_replace('{ean13}', $ean13, self::END_POINT_FORMAT);
        var_dump($url);
        $response = self::getHTTPClient()->get($url);

        if ($response->getStatusCode() == 200) {
            $jsonData = $response->getBody()->getContents();
            var_dump(json_decode($jsonData));
            $serializer = SerializerBuilder::create()->build();

            /** @var Model\Result $object */
            $object = $serializer->deserialize($jsonData, 'Tazorax\OpenFoodFacts\Model\Result', 'json');

            $product = $object->getProduct();

        }
        var_dump($product);
        exit;
    }

    /**
     * @return HTTPClient
     */
    protected static function getHTTPClient()
    {

        if (is_null(self::$http_client)) {
            self::$http_client = new HTTPClient();
        }

        return self::$http_client;
    }
}
