<?php


namespace GH\ImgLib;

class Size
{

  /**
   * Width of image
   *
   * @var int
   */
    public $width;

    /**
     * Height of image
     *
     * @var int
     */
    public $height;

    /**
     * Size constructor.
     *
     * @param int $width
     * @param int $height
     */
    public function __construct($width = null, $height = null)
    {
        $this->width = is_numeric($width) ? (int)$width : 1;
        $this->height = is_numeric($height) ? (int)$height : 1;
    }

    /**
     * Set width and height of image
     *
     * @param int $width
     * @param int $height
     */
    public function setDimensions($width, $height)
    {
        $this->width = $width;
        $this->height =$height;
    }

    /**
     * Get current width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Get current height
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Calculate aspect ratio
     *
     * @return float|int
     */
    public function getRatio()
    {
        return $this->width / $this->height;
    }
}
