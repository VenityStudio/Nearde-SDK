<?php
namespace ide\forms;

use ide\Ide;
use ide\IdeConfigurable;
use ide\IdeException;
use ide\Logger;
use ide\utils\UiUtils;
use php\gui\designer\UXDirectoryTreeView;
use php\gui\dock\UXDockPane;
use php\gui\event\UXEvent;
use php\gui\layout\UXAnchorPane;
use php\gui\layout\UXHBox;
use php\gui\layout\UXVBox;
use php\gui\UXDndTabPane;
use php\gui\UXImage;
use php\gui\UXLabel;
use php\gui\UXMenu;
use php\gui\UXMenuBar;
use php\gui\UXMenuItem;
use php\gui\UXNode;
use php\gui\UXScreen;
use php\gui\UXSplitPane;
use php\gui\UXTabPane;
use php\gui\UXTreeView;
use php\lib\fs;
use php\lib\str;

/**
 * @property UXTabPane $fileTabPane
 * @property UXTabPane $projectTabs
 * @property UXVBox $properties
 * @property UXSplitPane $contentSplit
 * @property UXAnchorPane $directoryTree
 * @property UXTreeView $projectTree
 * @property UXHBox $headPane
 * @property UXHBox $headRightPane
 * @property UXVBox $contentVBox
 * @property UXAnchorPane $bottomSpoiler
 * @property UXTabPane $bottomSpoilerTabPane
 * @property UXSplitPane $splitTree
 *
 * @property UXDockPane $dockPane
 * @property UXHBox $statusPane
 */
class MainForm extends AbstractIdeForm
{
    use IdeConfigurable;

    /**
     * @var UXMenuBar
     */
    public $mainMenu;

    /**
     * @var UXAnchorPane
     */
    private $bottom;

    /**
     * MainForm constructor.
     */
    public function __construct()
    {
        
    }

    /**
     * @param $string
     * @return null|UXMenu
     */
    public function findSubMenu($string)
    {
        
    }

    protected function init()
    {
        
    }

    /**
     * @param string $id
     * @param string $text
     * @param bool $prepend
     * @return UXMenu
     * @throws IdeException
     */
    public function defineMenuGroup($id, $text, $prepend = false)
    {
        
    }

    /**
     * @event showing
     */
    public function doShowing()
    {
        
    }

    public function show()
    {
        
    }

    /**
     * @event close
     *
     * @param UXEvent $e
     *
     * @throws \Exception
     * @throws \php\io\IOException
     */
    public function doClose(UXEvent $e = null)
    {
        
    }

    /**
     * @return UXHBox
     */
    public function getHeadPane()
    {
        
    }

    /**
     * @return UXHBox
     */
    public function getHeadRightPane()
    {
        
    }

    /**
     * @return UXTreeView
     */
    public function getProjectTree()
    {
        
    }

    public function hideBottom()
    {
        
    }

    public function showBottom(UXNode $content = null)
    {
        
    }

    /**
     * @return BuildProgressForm
     */
    public function showCLI(): BuildProgressForm
    {
        
    }
}