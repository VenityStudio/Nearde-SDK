<?php
namespace ide\systems;

use ide\Ide;
use ide\Logger;
use ide\project\ProjectFile;
use ide\utils\FileUtils;
use php\gui\designer\FileSystemWatcher;
use php\gui\UXApplication;
use php\io\File;
use php\io\IOException;
use php\lang\IllegalStateException;
use php\lang\InterruptedException;
use php\lang\Thread;
use php\lib\str;

class WatcherSystem
{
    /** @var FileSystemWatcher[] */
    protected static $watchers = [];

    /** @var Thread[] */
    protected static $threads = [];

    /** @var callable[] */
    protected static $handlers = [];

    protected static $enabled = true;

    static function addListener($handler)
    {
        
    }

    static function clearListeners()
    {
        
    }

    static function trigger($event)
    {
        
    }

    static function off()
    {
        
    }

    static function on()
    {
        
    }

    static function clear()
    {
        
    }

    static function removePath($path, $close = true)
    {
        
    }

    static function addPathRecursive($path)
    {
        
    }

    static function addPath($path, $appendCreatedPath = false)
    {
        
    }

    static function shutdown()
    {
        
    }
}