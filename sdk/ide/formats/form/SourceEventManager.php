<?php
namespace ide\formats\form;

use ide\formats\form\event\AbstractEventKind;
use ide\Ide;
use ide\Logger;
use ide\misc\EventHandlerBehaviour;
use ide\project\behaviours\PhpProjectBehaviour;
use ide\utils\FileUtils;
use ide\utils\PhpParser;
use php\io\File;
use php\io\IOException;
use php\io\MemoryStream;
use php\io\Stream;
use php\lib\arr;
use php\lib\fs;
use php\lib\Items;
use php\lib\Str;
use php\util\Regex;
use php\util\Scanner;
use phpx\parser\SourceToken;
use phpx\parser\SourceTokenizer;

/**
 * Class SourceEventManager
 * @package ide\formats\form
 *
 * TODO move to other namespace.
 */
class SourceEventManager
{
    /**
     * @var string
     */
    protected $file;

    /**
     * @var string
     */
    protected $className;

    /**
     * @var int
     */
    protected $classBeginLine;

    /**
     * @var array
     */
    protected $eventBinds = [];

    /**
     * @var SourceToken[]
     */
    protected $readTokens = [];

    /**
     * @param $file
     */
    public function __construct($file)
    {
        
    }

    /**
     * @param string $id
     *
     * @return array
     */
    public function findBinds($id)
    {
        
    }

    /**
     * @param $class
     * @param $method
     * @return array|null
     */
    public function findMethod($class, $method)
    {
        
    }

    /**
     * @param string $id
     * @param $event
     *
     * @return array|null
     */
    public function findBind($id, $event)
    {
        
    }

    /**
     * @param $id
     *
     * @return bool
     */
    public function removeBinds($id)
    {
        
    }

    public function loadContent()
    {
        
    }

    public function save($content)
    {
        
    }

    /**
     * @param $id
     * @param $event
     *
     * @return bool
     */
    public function removeBind($id, $event)
    {
        
    }

    public function changeBind($id, $oldEvent, $newEvent)
    {
        
    }
    /**
     * @param string $oldId
     * @param string $newId
     * @param array $eventsWithIdParam  e.g. ['collision']
     * @return array
     */
    public function renameBind($oldId, $newId, array $eventsWithIdParam = [])
    {
        
    }

    public function insertCodeToMethod($class, $method, $code)
    {
        
    }

    public function replaceCodeOfMethod($class, $method, $code)
    {
        
    }

    public function getCodeOfMethod($class, $method)
    {
        
    }

    public function addUseImports(array $imports)
    {
        
    }

    /**
     * @param $id
     * @param $event
     * @param AbstractEventKind $kind
     * @param string $methodName
     */
    public function addBind($id, $event, AbstractEventKind $kind, $methodName = null)
    {
        
    }

    /**
     * @return string
     */
    public function getClassName()
    {
        
    }

    /**
     * ...
     */
    public function load()
    {
        
    }

    protected function tryAppendEventMethod(SourceTokenizer $tokenizer, SourceToken $function, SourceToken $comment)
    {
        
    }

    protected function prevTo($tokenType, $iterMax = -1, $word = null)
    {
        
    }


    protected function nextToClosedBrace(SourceTokenizer $tokenizer, $open, $close)
    {
        
    }

    protected function nextTo(SourceTokenizer $tokenizer, $tokenType, $word = null)
    {
        
    }

    public function registerTarget(string $id, string $getElementClass)
    {
        
    }

    public function unregisterTarget(string $id): bool
    {
        
    }
}