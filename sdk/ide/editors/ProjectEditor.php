<?php
namespace ide\editors;

use ide\formats\ProjectFormat;
use ide\Ide;
use ide\Logger;
use ide\project\control\AbstractProjectControlPane;
use ide\ui\ListMenu;
use ide\utils\FileUtils;
use php\gui\framework\AbstractForm;
use php\gui\framework\EventBinder;
use php\gui\layout\UXAnchorPane;
use php\gui\layout\UXVBox;
use php\gui\UXApplication;
use php\gui\UXDesktop;
use php\gui\UXDialog;
use php\gui\UXLabel;
use php\gui\UXListCell;
use php\gui\UXListView;
use php\gui\UXLoader;
use php\gui\UXNode;
use php\gui\UXSeparator;
use php\io\File;
use php\io\ResourceStream;
use php\io\Stream;
use php\lib\arr;
use php\lib\reflect;
use php\lib\str;

/**
 * Class ProjectEditor
 * @package ide\editors
 *
 * @property ProjectFormat $format
 *
 */
class ProjectEditor extends AbstractEditor
{
    /**
     * @var bool
     */
    protected $init = false;

    /**
     * @var AbstractProjectControlPane[]
     */
    protected $controlPanes = [];

    /**
     * @var UXAnchorPane
     */
    protected $contentPane;

    /**
     * @var ListMenu
     */
    protected $menu;

    /**
     * ProjectEditor constructor.
     * @param string $file
     */
    public function __construct($file)
    {
        
    }

    public function addControlPane(AbstractProjectControlPane $pane)
    {
        
    }

    public function getTitle()
    {
        
    }

    public function getTabStyle()
    {
        
    }

    public function isPrependTab()
    {
        
    }

    public function isCloseable()
    {
        
    }

    public function isDraggable()
    {
        
    }

    public function refresh()
    {
        
    }

    public function open($param = null)
    {
        
    }

    public function leave()
    {
        
    }


    public function load()
    {
        
    }

    public function save()
    {
        
    }

    public function close($save = true)
    {
        
    }

    public function hide()
    {
       
    }

    /**
     * @return AbstractProjectControlPane|null
     */
    public function getOpenedPane()
    {
        
    }

    public function navigate($paneClass, $setMenu = true)
    {
        
    }

    /**
     * @return UXNode
     */
    public function makeUi()
    {
        
    }

    public function makeLeftPaneUi()
    {
        
    }
}
