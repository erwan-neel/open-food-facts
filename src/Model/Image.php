<?php
/**
 * Created by PhpStorm.
 * User: tazo
 * Date: 19/11/2016
 * Time: 11:25
 */

namespace Tazorax\OpenFoodFacts\Model;


class Image
{
    /**
     * @var string
     */
    private $url;
    /**
     * @var string
     */
    private $small_url;
    /**
     * @var string
     */
    private $thumb_url;

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getSmallUrl()
    {
        return $this->small_url;
    }

    /**
     * @param string $small_url
     * @return Image
     */
    public function setSmallUrl($small_url)
    {
        $this->small_url = $small_url;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbUrl()
    {
        return $this->thumb_url;
    }

    /**
     * @param string $thumb_url
     * @return Image
     */
    public function setThumbUrl($thumb_url)
    {
        $this->thumb_url = $thumb_url;
        return $this;
    }


}
