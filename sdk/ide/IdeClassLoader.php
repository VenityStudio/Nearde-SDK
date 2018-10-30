<?php
namespace ide;

use function flow;
use ide\systems\IdeSystem;
use ide\utils\FileUtils;
use php\io\File;
use php\io\IOException;
use php\io\Stream;
use php\lang\ClassLoader;
use php\lang\IllegalStateException;
use php\lang\JavaException;
use php\lang\Module;
use php\lib\fs;
use php\lib\reflect;
use php\lib\str;
use php\time\Time;
use php\time\Timer;

class IdeClassLoader extends ClassLoader
{
    const VERSION = 1;

    /**
     * @var \php\io\File
     */
    protected $cacheBytecodeDir;

    /**
     * @var bool
     */
    protected $cache;

    /**
     * @var bool
     */
    protected $reloadCache = false;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var
     */
    protected $needToDumpClasses;

    /**
     * @var array
     */
    protected $classPaths = [];

    /**
     * IdeClassLoader constructor.
     * @param bool $cache
     * @param null $version
     * @throws IllegalStateException
     */
    public function __construct($cache = true, $version = null)
    {
        
    }

    public function clearByteCodeCache()
    {
        
    }

    public function invalidateByteCodeCache()
    {
        
    }

    public function addClassPath($path)
    {
        
    }

    public function removeClassPath($path)
    {
        
    }

    protected function loadClassFromPath($name, File $fileCompiled = null)
    {
        
    }

    function loadClass($name)
    {
        
    }
}