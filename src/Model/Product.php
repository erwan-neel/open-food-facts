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
    private $product_name;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $generic_name;

    /**
     * @JMS\Type("array")
     * @JMS\SerializedName("brands_tags")
     * @JMS\Accessor(getter="getBrands",setter="setBrandsFromArray")
     * @var ArrayCollection<Tazorax\OpenFoodFacts\Model\Brand>
     */
    private $brands;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $image_url;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $image_thumb_url;

    /**
     * @JMS\Type("ArrayCollection<Tazorax\OpenFoodFacts\Model\Ingredient>")
     * @var ArrayCollection<Tazorax\OpenFoodFacts\Model\Ingredient>
     */
    private $ingredients;

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
     * @return ArrayCollection<Tazorax\OpenFoodFacts\Model\Brand>
     */
    public function getBrands()
    {
        return $this->brands;
    }

    /**
     * @param array $brands_tags
     * @return Product
     */
    public function setBrandsFromArray($brands_tags)
    {
        $this->brands = new ArrayCollection();

        foreach ($brands_tags as $tag) {
            $brand = new Brand();
            $brand->setId($tag);
            $this->brands->add($brand);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * @return string
     */
    public function getImageThumbUrl()
    {
        return $this->image_thumb_url;
    }

    /**
     * @return ArrayCollection
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }


}
