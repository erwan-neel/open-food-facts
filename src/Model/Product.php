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
     * @var Image
     */
    private $image;

    /**
     * @var Image
     */
    private $image_front;

    /**
     * @var Image
     */
    private $image_ingredients;

    /**
     * @var Image
     */
    private $image_nutrition;


    /* Following properties are not used by this class, only by and for deserializer */

    /**
     * @JMS\Type("string")
     * @JMS\Accessor(setter="setImageUrl")
     */
    private $image_url;

    /**
     * @JMS\Type("string")
     * @JMS\Accessor(setter="setImageThumbUrl")
     */
    private $image_thumb_url;

    /**
     * @JMS\Type("string")
     * @JMS\Accessor(setter="setImageSmallUrl")
     */
    private $image_small_url;

    /**
     * @JMS\Type("string")
     * @JMS\Accessor(setter="setImageFrontUrl")
     */
    private $image_front_url;

    /**
     * @JMS\Type("string")
     * @JMS\Accessor(setter="setImageFrontThumbUrl")
     */
    private $image_front_thumb_url;

    /**
     * @JMS\Type("string")
     * @JMS\Accessor(setter="setImageFrontSmallUrl")
     */
    private $image_front_small_url;

    /**
     * @JMS\Type("string")
     * @JMS\Accessor(setter="setImageIngredientsUrl")
     */
    private $image_ingredients_url;

    /**
     * @JMS\Type("string")
     * @JMS\Accessor(setter="setImageIngredientsThumbUrl")
     */
    private $image_ingredients_thumb_url;

    /**
     * @JMS\Type("string")
     * @JMS\Accessor(setter="setImageIngredientsSmallUrl")
     */
    private $image_ingredients_small_url;

    /**
     * @JMS\Type("string")
     * @JMS\Accessor(setter="setImageNutritionUrl")
     */
    private $image_nutrition_url;

    /**
     * @JMS\Type("string")
     * @JMS\Accessor(setter="setImageNutritionThumbUrl")
     */
    private $image_nutrition_thumb_url;

    /**
     * @JMS\Type("string")
     * @JMS\Accessor(setter="setImageNutritionSmallUrl")
     */
    private $image_nutrition_small_url;


    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return Image
     */
    public function getImageFront()
    {
        return $this->image_front;
    }

    /**
     * @return Image
     */
    public function getImageIngredients()
    {
        return $this->image_ingredients;
    }

    /**
     * @return Image
     */
    public function getImageNutrition()
    {
        return $this->image_nutrition;
    }


    private function setImageUrls($property_name, $type, $url)
    {
        if (null === $this->$property_name) {
            $this->$property_name = new Image();
        }

        switch ($type) {
            case 'thumb':
                $this->$property_name->setThumbUrl($url);
                break;
            case 'small':
                $this->$property_name->setSmallUrl($url);
                break;
            default:
                $this->$property_name->setUrl($url);
                break;
        }

    }

    /**
     * @param string $url
     */
    public function setImageUrl($url)
    {
        $this->setImageUrls('image', '', $url);
    }


    /**
     * @param string $url
     */
    public function setImageThumbUrl($url)
    {
        $this->setImageUrls('image', 'thumb', $url);
    }


    /**
     * @param string $url
     */
    public function setImageSmallUrl($url)
    {
        $this->setImageUrls('image', 'small', $url);
    }

    /**
     * @param string $url
     */
    public function setImageFrontUrl($url)
    {
        $this->setImageUrls('image_front', '', $url);
    }


    /**
     * @param string $url
     */
    public function setImageFrontThumbUrl($url)
    {
        $this->setImageUrls('image_front', 'thumb', $url);
    }


    /**
     * @param string $url
     */
    public function setImageFrontSmallUrl($url)
    {
        $this->setImageUrls('image_front', 'small', $url);
    }

    /**
     * @param string $url
     */
    public function setImageIngredientsUrl($url)
    {
        $this->setImageUrls('image_ingredients', '', $url);
    }


    /**
     * @param string $url
     */
    public function setImageIngredientsThumbUrl($url)
    {
        $this->setImageUrls('image_ingredients', 'thumb', $url);
    }


    /**
     * @param string $url
     */
    public function setImageIngredientsSmallUrl($url)
    {
        $this->setImageUrls('image_ingredients', 'small', $url);
    }

    /**
     * @param string $url
     */
    public function setImageNutritionUrl($url)
    {
        $this->setImageUrls('image_nutrition', '', $url);
    }


    /**
     * @param string $url
     */
    public function setImageNutritionThumbUrl($url)
    {
        $this->setImageUrls('image_nutrition', 'thumb', $url);
    }


    /**
     * @param string $url
     */
    public function setImageNutritionSmallUrl($url)
    {
        $this->setImageUrls('image_nutrition', 'small', $url);
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
