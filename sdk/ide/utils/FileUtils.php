<?php
namespace ide\utils;

use ide\Ide;
use ide\Logger;
use ide\ui\Notifications;
use php\compress\ZipFile;
use php\gui\UXApplication;
use php\gui\UXDialog;
use php\io\File;
use php\io\FileStream;
use php\io\IOException;
use php\io\Stream;
use php\lang\System;
use php\lib\fs;
use php\lib\Str;
use php\time\Time;

/**
 * Class FileUtils
 * @package ide\utils
 */
class FileUtils
{
    /**
     * @param $name
     * @return bool
     */
    public static function validate($name)
    {
        
    }

    /**
     * @deprecated
     * @param string $path
     * @param callable $handle
     */
    public static function scan($path, callable $handle)
    {
        
    }

    /**
     * @deprecated
     * @param $file
     * @return string
     */
    public static function hash($file)
    {
        
    }

    /**
     * @param string $filename
     * @return string
     */
    public static function urlPath($filename)
    {
        
    }

    /**
     * @param $name
     *
     * @return string
     */
    public static function hashName($name)
    {
        
    }

    public static function adaptName($name)
    {
        
    }

    public static function normalizeName($name)
    {
        
    }

    /**
     * @param string $rootDir
     * @param string $path
     *
     * @return string
     */
    public static function relativePath($rootDir, $path)
    {
        
    }

    /**
     * @deprecated
     * @param $name
     * @return string
     */
    public static function getExtension($name)
    {
        
    }

    /**
     * @deprecated
     * @param $name
     * @return string
     */
    public static function stripExtension($name)
    {
        
    }

    public static function copyDirectory($directory, $newDirectory)
    {
        
    }

    /**
     * @param string $zipFile
     * @param string $innerPath
     * @param $dest
     * @return int
     */
    public static function copyFileFromZip($zipFile, $innerPath, $dest)
    {
        
    }

    /**
     * @param $zipFile
     * @param $innerPath
     * @param $dest
     * @param callable $finish
     */
    public static function copyFileFromZipAsync($zipFile, $innerPath, $dest, callable $finish = null)
    {
        
    }

    /**
     * @param $origin
     * @param $dest
     * @param callable $finish
     */
    public static function copyFileAsync($origin, $dest, callable $finish = null)
    {
        
    }

    /**
     * @param $origin
     * @param $dest
     * @return int
     */
    public static function copyFile($origin, $dest)
    {
        
    }

    public static function deleteDirectory($directory)
    {
        
    }

    public static function putAsync($filename, $content, $encoding = 'UTF-8')
    {
        
    }

    public static function put($filename, $content, $encoding = 'UTF-8')
    {
        
    }

    public static function get($filename, $encoding = 'UTF-8')
    {
        
    }

    public static function equalNames($oneName, $twoName)
    {
        
    }

    public static function startsName($fullName, $suffixName)
    {
        
    }

    public static function replaceInFile($fileName, $what, $to)
    {
        
    }
}