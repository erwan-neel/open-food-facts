<?php
/**
 * Created by PhpStorm.
 * User: tazo
 * Date: 13/11/2016
 * Time: 19:45
 */

namespace Tazorax\OpenFoodFacts\Model;

use JMS\Serializer\Annotation as JMS;

class Ingredient
{
    /**
     * @JMS\Type("int")
     * @var int
     */
    protected $percent;
    /**
     * @JMS\Type("int")
     * @var int
     */
    protected $rank;
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $text;
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $id;

    /**
     * @return int
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }


}
