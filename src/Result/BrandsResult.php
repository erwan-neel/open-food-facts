<?php
/**
 * Created by PhpStorm.
 * User: tazo
 * Date: 18/11/2016
 * Time: 20:59
 */

namespace Tazorax\OpenFoodFacts\Result;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as JMS;

class BrandsResult
{
    /**
     * @JMS\Type("ArrayCollection<Tazorax\OpenFoodFacts\Model\Brand>")
     * @JMS\SerializedName("tags")
     * @var ArrayCollection<Tazorax\OpenFoodFacts\Model\Brand>
     */
    private $brands;

    /**
     * @return ArrayCollection<Tazorax\OpenFoodFacts\Model\Brand>
     */
    public function getBrands()
    {
        return $this->brands;
    }
}
