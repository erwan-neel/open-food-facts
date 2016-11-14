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
    const PRODUCT_FOUND = 1;
    const PRODUCT_NOT_FOUND = 0;
    /**
     * @JMS\Type("integer")
     * @var int
     */
    private $status;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $code;

    /**
     * @JMS\Type("Tazorax\OpenFoodFacts\Model\Product")
     * @var Product
     */
    private $product;

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

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
