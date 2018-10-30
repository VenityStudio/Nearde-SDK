<?php
namespace ide\editors;
use ide\editors\form\IdeTabPane;
use ide\formats\AbstractFormat;
use ide\Ide;
use ide\IdeConfiguration;
use ide\Logger;
use ide\project\Project;
use ide\project\ProjectIndexer;
use ide\systems\FileSystem;
use ide\utils\FileUtils;
use ide\utils\Json;
use php\gui\layout\UXPane;
use php\gui\UXNode;
use php\lang\IllegalStateException;
use php\lang\Thread;
use php\lib\reflect;
use php\lib\str;

/**
 * Class AbstractEditor
 * @package ide\editors
 */
abstract class AbstractEditor
{
    /**
     * @var string
     */
    protected $file;

    /**
     * @var int
     */
    protected $fileTime;

    /**
     * @var bool
     */
    protected $incorrectFormat = false;

    /***
     * @var bool
     */
    protected $readOnly = false;

    /**
     * @var bool
     */
    protected $tabbed = true;

    /**
     * @var AbstractFormat
     */
    protected $format;

    /**
     * @var null|IdeTabPane
     */
    protected $leftPaneUi = null;

    /**
     * @var string[]
     */
    protected $stylesheets = [];


    public $cacheData = [];

    /**
     * AbstractEditor constructor.
     * @param string $file
     */
    public function __construct($file)
    {
        
    }

    /**
     * @return IdeConfiguration
     */
    protected function getIdeConfig()
    {
        
    }

    protected function saveIdeConfig()
    {
        
    }

    /**
     * @return bool
     */
    public function isReadOnly()
    {
        
    }

    public function isAutoClose()
    {
        
    }

    public function canOpenInWindow()
    {
        
    }

    /**
     * @param bool $readOnly
     */
    public function setReadOnly($readOnly)
    {
        
    }

    /**
     * @return bool
     */
    public function isTabbed()
    {
        
    }

    /**
     * @return bool
     */
    public function isPrependTab()
    {
        
    }

    /**
     * @param bool $tabbed
     */
    public function setTabbed($tabbed)
    {
        
    }

    /**
     * @return boolean
     */
    public function isIncorrectFormat()
    {
        
    }

    public function isCorrectFormat()
    {
        
    }

    /**
     * @param boolean $incorrectFormat
     */
    public function setIncorrectFormat($incorrectFormat)
    {
        
    }

    /**
     * @return bool
     */
    public function isCloseable()
    {
        
    }

    public function isDraggable()
    {
        
    }

    public function getTabStyle()
    {
        
    }

    /**
     * @return string
     */
    public function getFile()
    {
        
    }

    /**
     * @param mixed $message
     */
    public function sendMessage($message)
    {

    }

    public function addStylesheet($stylesheet)
    {
        
    }

    public function removeStylesheet($stylesheet)
    {
        
    }

    /**
     * Вернуть стили редактора.
     *
     * @return string[]
     */
    public function getStylesheets()
    {
        
    }

    /**
     * @param AbstractFormat $format
     */
    public function setFormat($format)
    {
        
    }

    /**
     * @return AbstractFormat
     */
    public function getFormat()
    {
        
    }

    protected function reindexImpl(ProjectIndexer $indexer)
    {
        
    }

    public function reindex()
    {
        
    }

    abstract public function load();
    abstract public function save();

    /**
     * @param bool $save
     */
    public function close($save = true)
    {
        
    }

    public function leave()
    {
        
    }

    public function open($param = null)
    {
        
    }

    public function refresh()
    {
        // nop
    }

    public function getTitle()
    {
        
    }

    public function getIcon()
    {
        
    }

    public function getTooltip()
    {
        
    }

    /**
     * @return UXNode
     */
    abstract public function makeUi();

    /**
     * Контент для левой панели главной формы Ide.
     *
     * @return IdeTabPane|UXNode
     */
    public function makeLeftPaneUi()
    {
        
    }

    /**
     * @return null
     */
    public function getLeftPaneUi()
    {
        
    }

    /**
     * @param null $leftPaneUi
     * @throws IllegalStateException
     */
    public function setLeftPaneUi($leftPaneUi)
    {
        
    }

    public function hide()
    {
        
    }

    public function delete($silent = false)
    {
        
    }

    public function equals($what)
    {
        
    }
}