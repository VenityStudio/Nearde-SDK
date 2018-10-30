<?php
namespace ide\misc;

use framework\core\Module;
use ide\editors\AbstractEditor;
use ide\Ide;
use ide\utils\UiUtils;
use php\gui\UXButton;
use php\gui\UXMenuItem;
use php\gui\UXSeparator;
use php\lib\str;

/**
 * Class AbstractCommand
 * @package ide\misc
 */
abstract class AbstractCommand extends Module
{
    /**
     * @var mixed
     */
    protected $target;

    /**
     * AbstractCommand constructor.
     */
    public function __construct()
    {
        
    }

    abstract public function getName();

    abstract public function onExecute($e = null, AbstractEditor $editor = null);



    public function getUniqueId()
    {
        
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        
    }

    public function withBeforeSeparator()
    {
        
    }

    public function withAfterSeparator()
    {
        
    }

    public function isAlways()
    {
        
    }

    public function getIcon()
    {
        
    }

    public function getAccelerator()
    {
        
    }

    public function getCategory()
    {
        
    }

    public function makeAction()
    {
        
    }

    public function makeGlyphButton()
    {
        
    }

    public function makeMenuItem()
    {
        
    }

    public function makeUiForHead()
    {
        
    }

    public function makeUiForRightHead()
    {
        
    }

    /**
     * @param mixed $target
     */
    public function setTarget($target)
    {
        
    }

    public static function makeSeparator()
    {
        
    }

    /**
     * @param $name
     * @param $icon
     * @param callable $onExecute
     *
     * @param null $accelerator
     * @return SimpleSingleCommand
     */
    public static function make($name, $icon, callable $onExecute, $accelerator = null)
    {
        
    }

    public static function makeForMenu($name, $icon, callable $onExecute, $accelerator = null)
    {
        
    }

    public static function makeWithText($name, $icon, callable $onExecute, $accelerator = null)
    {
        
    }
}

class SeparatorCommand extends AbstractCommand
{
    public function getName()
    {
        
    }

    public function onExecute($e = null, AbstractEditor $editor = null)
    {
    }

    public function makeUiForHead()
    {
        
    }
}

class SimpleSingleCommand extends AbstractCommand
{
    protected $name, $icon, $onExecute;

    /**
     * @var bool
     */
    protected $textVisible = false;

    /**
     * @var bool
     */
    protected $headVisible = true;

    /**
     * @var string
     */
    protected $category = 'project';

    /**
     * @var bool
     */
    protected $always = false;

    /**
     * @var string
     */
    protected $accelerator = null;

    /**
     * @var bool
     */
    protected $afterSeparator = false, $beforeSeparator = false;

    protected $id;

    /**
     * ClosureCommand constructor.
     *
     * @param $name
     * @param $icon
     * @param callable $onExecute
     * @param null $accelerator
     */
    public function __construct($name, $icon, callable $onExecute, $accelerator = null)
    {
        
    }

    public function getUniqueId()
    {
        
    }

    public function withAfterSeparator()
    {
        
    }

    public function withBeforeSeparator()
    {
        
    }

    /**
     * @return bool
     */
    public function isAfterSeparator()
    {
        
    }

    /**
     * @param bool $afterSeparator
     */
    public function setAfterSeparator($afterSeparator)
    {
        
    }

    /**
     * @return bool
     */
    public function isBeforeSeparator()
    {
        
    }

    /**
     * @param bool $beforeSeparator
     */
    public function setBeforeSeparator($beforeSeparator)
    {
        
    }

    public function getName()
    {
        
    }

    public function getIcon()
    {
        
    }

    public function makeUiForHead()
    {
        
    }

    public function getAccelerator()
    {
        
    }

    public function onExecute($e = null, AbstractEditor $editor = null)
    {
        
    }

    /**
     * @param boolean $textVisible
     */
    public function setTextVisible($textVisible)
    {
        
    }

    /**
     * @param boolean $headVisible
     */
    public function setHeadVisible($headVisible)
    {
        
    }

    public function makeMenuItem()
    {
        
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        
    }

    /**
     * @return boolean
     */
    public function isAlways()
    {
        
    }

    /**
     * @param boolean $always
     */
    public function setAlways($always)
    {
        
    }
}