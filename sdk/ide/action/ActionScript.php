<?php
namespace ide\action;
use ide\Logger;
use ide\utils\FileUtils;
use ide\utils\Json;
use ide\utils\PhpParser;
use php\format\ProcessorException;
use php\lib\fs;
use php\lib\Items;
use php\lib\Str;
use php\util\Flow;
use php\util\SharedStack;
use php\xml\DomDocument;
use php\xml\DomElement;
use php\xml\XmlProcessor;

/**
 * Class ActionContainer
 * @package ide\editors\action
 */
class ActionScript
{
    /**
     * @var DomDocument
     */
    protected $document;

    /**
     * @var ActionManager
     */
    protected $manager;

    /**
     * @var array
     */
    protected $localVariables;

    /**
     * ActionContainer constructor.
     * @param DomDocument $document
     * @param ActionManager $manager
     */
    public function __construct(DomDocument $document = null, ActionManager $manager = null)
    {
        
    }

    public function load($xmlFile)
    {
        
    }

    public function save($xmlFile)
    {
        
    }


    /**
     * @param Action[] $actions
     */
    public static function calculateLevels(array $actions)
    {
        
    }

    /**
     * @return array
     */
    public function getLocalVariables()
    {
        
    }

    public function addLocalVariable($name)
    {
        
    }

    public function compileActions($class, $method, array $actions, $comment = '', $endComment = '', $prefix = "\t\t")
    {
        
    }

    public function getImports(array $actions)
    {
        
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        
    }

    public function compile($file, $outputFile = null, $withSourceMap = false)
    {
        
    }
}