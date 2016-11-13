<?php
/**
 * Created by PhpStorm.
 * User: tazo
 * Date: 13/11/2016
 * Time: 19:20
 */

namespace Tazorax\OpenFoodFacts\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as JMS;

class Product
{
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $product_name;

    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $generic_name;

    /**
     * @JMS\Type("ArrayCollection<Tazorax\OpenFoodFacts\Model\Ingredient>")
     * @var ArrayCollection
     */
    protected $ingredients;

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * @return string
     */
    public function getGenericName()
    {
        return $this->generic_name;
    }

    /**
     * @return ArrayCollection
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }


}
