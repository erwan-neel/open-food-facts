<?php
/**
 * Created by PhpStorm.
 * User: tazo
 * Date: 13/11/2016
 * Time: 22:55
 */

namespace Tazorax\OpenFoodFacts\Tests;


use Tazorax\OpenFoodFacts\Client;
use Tazorax\OpenFoodFacts\Exception;

class ClientTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testExistingProduct()
    {
        $product = Client::getProductByEAN13('7622210421968');
        $this->assertEquals('Petit écolier chocolat au lait', $product->getProductName());
        $this->assertEquals('LU', $product->getBrands());
    }

    /**
     * @expectedException        Exception
     * @expectedExceptionMessage Product not found
     */
    public function testProductNotExist()
    {
        Client::getProductByEAN13('1234567890123');
    }
}
