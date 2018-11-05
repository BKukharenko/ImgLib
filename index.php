<?php

use \GH\ImgLib\Image;
use \GH\ImgLib\Tools\Crop;
use \GH\ImgLib\Tools\Resize;
use \GH\ImgLib\Size;

require_once __DIR__ . '/vendor/autoload.php';

$data = '';
$newSize = array(250, 250);

$imageSize = new Size();

//Image for crop
$imageCrop = new Image();

$imageCrop->init($data);
$imageCrop->checkFormat($data);

$imageCropHeight = $imageSize->getHeight();
$imageCropWidth = $imageSize->getWidth();

$cropper = new Crop($newSize);
$cropper->apply($imageCrop);

$imageCrop->save();

//Image for resize
$imageResize = new Image();

$imageResize->init($data);
$imageCrop->checkFormat($data);

$resizer = new Resize($newSize);
$resizer->apply($imageResize);

$imageResize->save();
