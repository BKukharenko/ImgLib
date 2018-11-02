<?php

namespace GH\ImgLib\Tools;

abstract class AbstractTool
{
    /**
     * Arguments of tool
     *
     * @var array
     *
     */
    public $arguments;


    /**
     * Applies current tool on image
     *
     * @param \GH\ImgLib\Image $image
     *
     * @return mixed
     *
     */
    abstract public function apply($image);


    /**
     * Creates new tool instance.
     *
     * @param array $arguments
     */
    public function __construct($arguments)
    {
        $this->arguments = $arguments;
    }
}
