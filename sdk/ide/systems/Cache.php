<?php
namespace ide\systems;

use ide\ui\LazyImage;
use ide\utils\FileUtils;
use php\gui\UXApplication;
use php\gui\UXImage;
use php\gui\UXImageView;
use php\io\File;
use php\lib\str;
use php\time\Time;

class Cache
{
    protected static $cacheImage = [];
    protected static $cacheImageView = [];

    public static function clear()
    {
        
    }

    /**
     * @param $path
     * @param array|null $size
     * @return UXImageView
     */
    public static function getResourceImageView($path, array $size = null)
    {
        
    }

    /**
     * @param $path
     * @return LazyImage|UXImage
     */
    public static function getResourceImage($path)
    {
        
    }

    /**
     * @param string $file
     * @return UXImage|LazyImage|null
     */
    public static function getImage($file)
    {
        
    }
}