<?php
namespace ide\editors\menu;

use action\Geometry;
use ide\editors\AbstractEditor;
use ide\Logger;
use ide\misc\AbstractCommand;
use ide\misc\EventHandlerBehaviour;
use ide\utils\UiUtils;
use php\desktop\Mouse;
use php\gui\event\UXKeyEvent;
use php\gui\event\UXMouseEvent;
use php\gui\UXContextMenu;
use php\gui\UXMenu;
use php\gui\UXMenuButton;
use php\gui\UXMenuItem;
use ide\Ide;
use php\gui\UXNode;
use php\gui\UXSplitMenuButton;
use php\lang\IllegalArgumentException;
use php\lib\str;

/**
 * Class ContextMenu
 * @package ide\editors\menu
 */
class ContextMenu
{
    use EventHandlerBehaviour;

    /**
     * @var UXContextMenu
     */
    protected $root;

    /**
     * @var AbstractEditor
     */
    protected $editor;

    /**
     * @var callable
     */
    protected $filter;

    /**
     * @var UXMenu[]
     */
    protected $groups = [];

    /**
     * @var string
     */
    protected $style;

    /**
     * @var string
     */
    protected $cssClass;

    /**
     * @param AbstractEditor $editor
     * @param array $commands
     */
    public function __construct(AbstractEditor $editor = null, array $commands = [])
    {
        
    }

    /**
     * @return string
     */
    public function getCssClass()
    {
        
    }

    /**
     * @param string $cssClass
     */
    public function setCssClass($cssClass)
    {
        
    }

    /**
     * @return string
     */
    public function getStyle()
    {
        
    }

    /**
     * @param string $style
     */
    public function setStyle($style)
    {
        
    }

    /**
     * @return callable
     */
    public function getFilter()
    {
        
    }

    /**
     * @param callable $filter
     */
    public function setFilter(callable $filter)
    {
        
    }

    public function clear()
    {
        
    }

    public function addSeparator($group = null)
    {
        
    }

    public function addGroup($code, $title, $icon = null)
    {
        
    }

    protected function isCursorInPopup()
    {
        
    }

    public function addCommand(AbstractCommand $command)
    {
        
    }

    public function add(AbstractMenuCommand $command, $group = null)
    {
        
    }

    /**
     * @return \php\gui\UXContextMenu
     */
    public function getRoot()
    {
        
    }

    public function doShowing()
    {
        
    }

    public function show(UXNode $node)
    {
        
    }

    /**
     * Link context menu to node.
     * @param UXNode $node
     */
    public function linkTo(UXNode $node)
    {
        
    }

    /**
     * @param string $text
     * @param mixed $icon
     * @param callable|null $onClick
     * @return UXMenuButton
     */
    public function makeButton(string $text = '', UXNode $icon = null, callable $onClick = null)
    {
        
    }
}