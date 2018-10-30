<?php
namespace ide\systems;


use ide\IdeClassLoader;
use php\io\File;
use php\lang\System;
use php\lib\fs;
use php\lib\str;
use php\time\Time;

class IdeSystem
{
    /**
     * @return string
     */
    static function getOs()
    {
        
    }

    static function isJigsaw(): bool
    {
        
    }

    /**
     * @return string
     */
    static function getMode()
    {
        
    }

    /**
     * @return bool
     */
    static function isDevelopment()
    {
        
    }

    /**
     * @return string
     */
    static function getOwnLibVersion()
    {
        
    }

    /**
     * @return File[]
     */
    static function getOwnLibDirectories()
    {
        
    }

    /**
     * @param string $path
     *
     * @return File
     */
    static function getOwnFile($path)
    {
        
    }

    /**
     * @param $path
     * @param string $suffix
     * @return File
     */
    static function getFile($path, string $suffix = '')
    {
        
    }

    /**
     * @return File
     */
    static function getByteCodeCacheDir()
    {
        
    }

    /**
     * Очищает от кэша IDE.
     * @param $path
     */
    static function clearCache($path)
    {
        
    }

    /**
     * @param string $version
     * @return array
     */
    static function getVersionInfo($version)
    {
        
    }

    /**
     * @var IdeClassLoader
     */
    protected static $loader;

    public static function setLoader($loader)
    {
        
    }

    public static function getLoader()
    {
        
    }
}