<?php
/**
 * Created by PhpStorm.
 * User: tazo
 * Date: 15/11/2016
 * Time: 23:12
 */

namespace Tazorax\OpenFoodFacts\Manager;

use GuzzleHttp\Client as HTTPClient;
use JMS\Serializer\SerializerBuilder;
use Tazorax\OpenFoodFacts\Exception;

abstract class AbtractManager
{
    /**
     *
     */
    const API_END_POINT = 'http://world.openfoodfacts.org';

    /**
     * @var HTTPClient
     */
    static protected $http_client;

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

    protected static function performCall($url, $class)
    {
        $response = self::getHTTPClient()->get($url);

        if ($response->getStatusCode() == 200) {
            $jsonData = $response->getBody()->getContents();

            $serializer = SerializerBuilder::create()->build();

            return $serializer->deserialize($jsonData, $class, 'json');

        } else {
            throw new Exception('Connection error');
        }
    }
}
