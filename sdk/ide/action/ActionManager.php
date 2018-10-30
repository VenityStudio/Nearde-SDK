<?php
namespace ide\action;

use Files;
use ide\Ide;
use ide\IdeException;
use ide\Logger;
use ide\utils\FileUtils;
use php\lib\fs;
use php\lib\reflect;
use php\lib\Str;
use php\time\Time;
use php\xml\DomElement;

class ActionManager
{
    /**
     * @var AbstractActionType[]
     */
    protected $actionTypes = [];

    /**
     * @var AbstractActionType[]
     */
    protected $actionTypeByTagName = [];

    protected $actionTypeGroups = [];

    /**
     * @var int
     */
    protected $lastUpdated = 0;

    public static function get()
    {
        
    }

    function __construct()
    {
        
    }

    /**
     * @param $directory
     * @param string $outDirectory
     * @param callable $log
     * @param bool $withSourceMap
     */
    public function compile($directory, $outDirectory, callable $log = null, $withSourceMap = false)
    {
        
    }

    /**
     * @param DomElement $element
     * @return Action|null
     */
    public function buildAction(DomElement $element)
    {
        
    }

    /**
     * @return AbstractActionType[]
     */
    public function getActionTypes()
    {
        
    }

    /**
     * @param AbstractActionType|string $type
     * @throws IdeException
     */
    public function registerType($type)
    {
        
    }

    /**
     * @param string $class
     */
    public function unregisterType($class)
    {
        
    }

    public function free()
    {
        
    }

    public function lastUpdated()
    {
        
    }
    /**
     * @param string $source resource path
     * @throws IdeException
     */
    public function registerInternalList($source)
    {
        
    }

    /**
     * @param string $source
     * @throws IdeException
     */
    public function unregisterInternalList($source)
    {
        
    }
}