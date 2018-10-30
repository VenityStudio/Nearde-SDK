<?php
namespace ide\autocomplete;
use develnext\lexer\inspector\AbstractInspector;
use develnext\lexer\inspector\entry\TypeEntry;
use ide\Logger;
use ide\misc\EventHandlerBehaviour;
use php\io\MemoryStream;
use php\lib\Items;
use php\lib\Str;
use phpx\parser\SourceTokenizer;

/**
 * Class AutoComplete
 * @package ide\autocomplete
 */
class AutoComplete
{
    use EventHandlerBehaviour;

    /**
     * @var AutoComplete
     */
    protected $context = null;

    /**
     * @var AutoCompleteTypeRule[]
     */
    protected $rules = [];

    /**
     * @var AutoCompleteTypeLoader[]
     */
    protected $loader = [];

    /**
     * @var AutoCompleteRegion[]
     */
    protected $regions = [];

    /**
     * @var AutoCompleteRegion
     */
    protected $globalRegion = null;

    /**
     * @var AbstractInspector
     */
    private $inspector;

    /**
     * @param AbstractInspector $inspector
     */
    public function __construct(AbstractInspector $inspector)
    {
        
    }

    /**
     * @return AbstractInspector
     */
    public function getInspector()
    {
        
    }

    /**
     * @param $sourceCode
     * @param int $caretPosition
     * @param int $caretLine
     * @param int $caretOffset
     */
    public function update($sourceCode, $caretPosition = 0, $caretLine = 0, $caretOffset = 0)
    {
        
    }

    /**
     * @return AutoCompleteRegion
     */
    public function getGlobalRegion()
    {
        
    }

    /**
     * @param $line
     * @param $pos
     * @return AutoCompleteRegion
     */
    public function findRegion($line, $pos) {
        
    }

    public function setValueOfRegion($value, $category, $line = 0, $pos = 0, string $uid = null)
    {
        
    }

    public function addRegion(AutoCompleteRegion $region)
    {
        
    }

    /**
     * @param $string
     * @param AutoCompleteRegion $region
     * @return TypeEntry[]|string[]
     */
    public function identifyAndFetchType($string, AutoCompleteRegion $region = null)
    {
        
    }

    /**
     * @param string $prefix
     * @return string[]
     */
    public function identifyType($prefix, AutoCompleteRegion $region)
    {
        
    }

    /**
     * @param string $name
     * @return null|AutoCompleteType
     */
    public function fetchType($name)
    {
        
    }

    /**
     * @param AutoCompleteTypeRule $rule
     */
    public function registerTypeRule(AutoCompleteTypeRule $rule)
    {
        
    }

    /**
     * @param AutoCompleteTypeLoader $loader
     */
    public function registerTypeLoader(AutoCompleteTypeLoader $loader)
    {
        
    }

    /**
     * Example:
     *      ... ..  $this->form('MainForm')->title
     *
     * @param $line
     * @param $position
     * @return string
     */
    public function parsePrefix($line, $position)
    {
        
    }
}