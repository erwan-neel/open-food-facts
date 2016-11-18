<?php
/**
 * Created by PhpStorm.
 * User: tazo
 * Date: 14/11/2016
 * Time: 21:16
 */

namespace Tazorax\OpenFoodFacts\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as JMS;

class Brand
{
    /**
     * @JMS\Type("string")
     * @var string
     */
    private $id;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $name;

    /**
     * @var ArrayCollection<Tazorax\OpenFoodFacts\Model\Product>
     */
    private $products_;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Brand
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return ArrayCollection<Tazorax\OpenFoodFacts\Model\Product>
     */
    public function getProducts()
    {
        return $this->products_;
    }


}
