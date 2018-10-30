<?php
namespace ide\project\control;

use ide\misc\EventHandlerBehaviour;
use ide\ui\MenuViewable;
use php\gui\UXNode;

abstract class AbstractProjectControlPane implements MenuViewable
{
    use EventHandlerBehaviour;

    /**
     * @var UXNode
     */
    protected $ui;

    abstract public function getName();
    abstract public function getDescription();

    /**
     * @return UXNode
     */
    abstract protected function makeUi();

    public function save()
    {
        // nop.
    }

    public function load()
    {
        // nop.
    }

    public function open()
    {
        // nop.
    }

    public function leave()
    {
        
    }

    public function close()
    {
        // nop.
    }

    public function getIcon()
    {
        
    }

    function getMenuCount()
    {
        
    }

    /**
     * @return UXNode
     */
    final public function getUi()
    {
        
    }

    /**
     * Refresh ui and pane.
     */
    abstract public function refresh();
}