<?php
namespace ide\ui;

use ide\Ide;
use ide\misc\AbstractCommand;
use ide\misc\EventHandlerBehaviour;
use ide\utils\Json;
use php\gui\event\UXDragEvent;
use php\gui\event\UXEvent;
use php\gui\event\UXMouseEvent;
use php\gui\layout\UXAnchorPane;
use php\gui\layout\UXFlowPane;
use php\gui\layout\UXScrollPane;
use php\gui\paint\UXColor;
use php\gui\shape\UXRectangle;
use php\gui\UXContextMenu;
use php\gui\UXForm;
use php\gui\UXLabel;
use php\gui\UXMenuItem;
use php\gui\UXNode;
use php\lib\Items;
use php\lib\Str;

/**
 * Class FlowListView
 * @package ide\ui
 */
class FlowListViewDecorator implements \Countable
{
    use EventHandlerBehaviour;

    /**
     * @var UXFlowPane
     */
    protected $pane;

    /**
     * @var UXScrollPane
     */
    protected $scrollPane;

    /**
     * @var bool
     */
    protected $multipleSelection = true;

    /**
     * @var bool
     */
    protected $dragging = false;

    /**
     * @var string
     */
    protected $emptyListText;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var UXContextMenu
     */
    protected $menu;

    /**
     * @var bool
     */
    protected $isDragging = false;

    /**
     * @var UXForm
     */
    protected $selection;

    public function __construct(UXFlowPane $pane = null)
    {
        
    }

    public function replaceInParent()
    {
        
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        
    }

    /**
     * @return string
     */
    public function getId()
    {
        
    }

    public function initMenu()
    {
        
    }

    public function clearMenuCommands()
    {
        
    }

    public function addMenuCommand(AbstractCommand $command)
    {
        
    }

    /**
     * @return \php\gui\UXList
     */
    public function getChildren()
    {
        
    }

    /**
     * @return UXScrollPane
     */
    public function getPane()
    {
        
    }

    public function addSelectionNode(UXNode $node)
    {
        
    }

    public function toggleSelectionNode(UXNode $node)
    {
        
    }

    public function setSelectionNodes(array $nodes)
    {
        
    }

    public function getSelectionIndexes()
    {
        
    }

    /**
     * @return UXNode[]
     */
    public function getSelectionNodes()
    {
        
    }

    /**
     * @return UXNode
     */
    public function getSelectionNode()
    {
        
    }

    public function clearSelections()
    {
        
    }

    /**
     * @return string
     */
    public function getEmptyListText()
    {
        
    }

    /**
     * @param string $emptyListText
     */
    public function setEmptyListText($emptyListText)
    {
        
    }

    /**
     * @return boolean
     */
    public function isMultipleSelection()
    {
        
    }

    /**
     * @param boolean $multipleSelection
     */
    public function setMultipleSelection($multipleSelection)
    {
        
    }

    public function add(UXNode $node)
    {
        
    }

    public function clear()
    {
        
    }

    public function count()
    {
        
    }

    public function removeBySelections()
    {
        
    }

    public function remove(UXNode $node, $trigger = true)
    {
        
    }

    protected function doDragOver(UXDragEvent $e)
    {
        
    }

    protected function doDragDrop(UXDragEvent $e)
    {
        
    }
}