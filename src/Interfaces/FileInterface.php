<?php

namespace GH\ImgLib\Interfaces;

interface FileInterface
{

  /**
   * Initiates image from mixed data
   *
   * @param mixed $data
   *
   * @return object
   *
   */
    public function init($data);

    /**
     * Check image format
     *
     * @param $data
     *
     * @return mixed
     *
     */
    public function checkFormat($data);

    /**
     * Saves image in filesystem
     *
     * @param string $path
     *
     * @return \GH\ImgLib\Image
     */
    public function save($path = null);
}
