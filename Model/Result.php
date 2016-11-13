<?php
/**
 * Created by PhpStorm.
 * User: tazo
 * Date: 13/11/2016
 * Time: 19:26
 */

namespace Tazorax\OpenFoodFacts\Model;

use JMS\Serializer\Annotation as JMS;

class Result
{
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $code;
    /**
     * @JMS\Type("Tazorax\OpenFoodFacts\Model\Product")
     * @var Product
     */
    protected $product;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }


}
