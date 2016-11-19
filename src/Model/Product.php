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
     * @JMS\SerializedName("code")
     * @var string
     */
    private $bar_code;

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
     * @JMS\Type("ArrayCollection<Tazorax\OpenFoodFacts\Model\Ingredient>")
     * @var ArrayCollection<Tazorax\OpenFoodFacts\Model\Ingredient>
     */
    private $ingredients;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $quantity;

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
     * @JMS\Type("string")
     * @var string
     */
    private $image_small_url;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $image_front_url;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $image_front_thumb_url;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $image_front_small_url;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $image_ingredients_url;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $image_ingredients_thumb_url;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $image_ingredients_small_url;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $image_nutrition_url;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $image_nutrition_thumb_url;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $image_nutrition_small_url;


    /**
     * @return Image
     */
    public function getImage()
    {
        $image = new Image();
        $image
            ->setUrl($this->image_url)
            ->setSmallUrl($this->image_small_url)
            ->setThumbUrl($this->image_thumb_url);

        return $image;
    }

    /**
     * @return Image
     */
    public function getImageFront()
    {
        $image = new Image();
        $image
            ->setUrl($this->image_front_url)
            ->setSmallUrl($this->image_front_small_url)
            ->setThumbUrl($this->image_front_thumb_url);

        return $image;
    }

    /**
     * @return Image
     */
    public function getImageIngredients()
    {
        $image = new Image();
        $image
            ->setUrl($this->image_ingredients_url)
            ->setSmallUrl($this->image_ingredients_small_url)
            ->setThumbUrl($this->image_ingredients_thumb_url);

        return $image;
    }

    /**
     * @return Image
     */
    public function getImageNutrition()
    {
        $image = new Image();
        $image
            ->setUrl($this->image_nutrition_url)
            ->setSmallUrl($this->image_nutrition_small_url)
            ->setThumbUrl($this->image_nutrition_thumb_url);

        return $image;
    }

    /**
     * @return mixed
     */
    public function getBarCode()
    {
        return $this->bar_code;
    }

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
     * @return ArrayCollection
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


}
