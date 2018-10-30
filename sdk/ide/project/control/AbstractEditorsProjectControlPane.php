<?php
namespace ide\project\control;

use ide\editors\AbstractEditor;
use ide\editors\menu\AbstractMenuCommand;
use ide\forms\MessageBoxForm;
use ide\Ide;
use ide\systems\FileSystem;
use ide\ui\FlowListViewDecorator;
use ide\ui\ImageBox;
use php\gui\event\UXMouseEvent;
use php\gui\layout\UXHBox;
use php\gui\layout\UXVBox;
use php\gui\UXButton;
use php\gui\UXDialog;
use php\gui\UXNode;
use php\gui\UXSeparator;
use php\lib\fs;

class AbstractEditorsProjectControlPaneEditCommand extends AbstractMenuCommand
{
    /**
     * @var AbstractEditorsProjectControlPane
     */
    protected $pane;

    /**
     * AbstractEditorsProjectControlPaneEditCommand constructor.
     * @param AbstractEditorsProjectControlPane $pane
     */
    public function __construct(AbstractEditorsProjectControlPane $pane)
    {
        
    }

    public function getName()
    {
        
    }

    public function getIcon()
    {
        
    }

    public function onExecute($e = null, AbstractEditor $editor = null)
    {
        
    }
}

class AbstractEditorsProjectControlPaneCloneCommand extends AbstractMenuCommand
{
    /**
     * @var AbstractEditorsProjectControlPane
     */
    protected $pane;

    /**
     * AbstractEditorsProjectControlPaneEditCommand constructor.
     * @param AbstractEditorsProjectControlPane $pane
     */
    public function __construct(AbstractEditorsProjectControlPane $pane)
    {
        
    }

    public function getName()
    {
        
    }

    public function getIcon()
    {
        
    }

    public function onExecute($e = null, AbstractEditor $editor = null)
    {
        
    }
}

/**
 * Class AbstractEditorsProjectControlPane
 * @package ide\project\control
 */
abstract class AbstractEditorsProjectControlPane extends AbstractProjectControlPane
{
    /**
     * @var FlowListViewDecorator
     */
    protected $list;

    /**
     * @return mixed
     */
    abstract protected function doAdd();

    /**
     * @return mixed[]
     */
    abstract protected function getItems();

    /**
     * @return mixed
     */
    abstract protected function getBigIcon($item);


    public function doEdit()
    {
        
    }

    public function doClone()
    {
        
    }

    /**
     * @return int
     */
    function getMenuCount()
    {
        
    }

    /**
     * @return mixed|null
     */
    public function getSelectedItem()
    {
        
    }

    /**
     * @param AbstractEditor $item
     * @return UXNode
     */
    protected function makeItemUi($item)
    {
        
    }

    /**
     * @return UXNode
     */
    protected function makeUi()
    {
        
    }

    /**
     * @return array
     */
    protected function makeAdditionalUi()
    {
        
    }

    protected function makeActionsUi()
    {
        
    }

    /**
     * Refresh ui and pane.
     */
    public function refresh()
    {
        
    }
}