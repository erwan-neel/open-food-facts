<?php
/**
 * Created by PhpStorm.
 * User: tazo
 * Date: 13/11/2016
 * Time: 22:55
 */

namespace Tazorax\OpenFoodFacts\Tests;


use Tazorax\OpenFoodFacts\OpenFoodFactsClient;
use Tazorax\OpenFoodFacts\Exception;

class OpenFoodFactsClientTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testExistingProduct()
    {
        $product = OpenFoodFactsClient::getProductByBarCode('7622210421968');
        $this->assertEquals('Petit écolier chocolat au lait', $product->getProductName());
        $this->assertEquals('lu', $product->getBrands()[0]->getId());
        $this->assertEquals('Petit beurre avec tablette de chocolat au lait', $product->getGenericName());
        $this->assertEquals('150g (12 biscuits)', $product->getQuantity());
    }

    /**
     * @expectedException        Exception
     * @expectedExceptionMessage Product not found
     */
    public function testProductNotExist()
    {
        OpenFoodFactsClient::getProductByBarCode('1234567890123');
    }

    public function testBrands()
    {
        $brands = OpenFoodFactsClient::getBrands();
        $this->assertFalse($brands->isEmpty());
    }
}
