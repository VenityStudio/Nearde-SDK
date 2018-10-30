<?php

namespace ide\project\behaviours\backup;

use ide\editors\menu\ContextMenu;
use ide\editors\ProjectEditor;
use ide\forms\MessageBoxForm;
use ide\Ide;
use ide\misc\SimpleSingleCommand;
use ide\project\behaviours\BackupProjectBehaviour;
use ide\project\control\AbstractProjectControlPane;
use ide\systems\FileSystem;
use ide\utils\UiUtils;
use php\gui\event\UXMouseEvent;
use php\gui\layout\UXHBox;
use php\gui\layout\UXVBox;
use php\gui\UXLabel;
use php\gui\UXListCell;
use php\gui\UXListView;
use php\gui\UXNode;
use php\gui\UXSeparator;
use php\lib\fs;
use php\time\Time;
use php\util\Locale;

class BackupProjectControlPane extends AbstractProjectControlPane
{
    /**
     * @var BackupProjectBehaviour
     */
    private $behaviour;

    /**
     * @var UXListView
     */
    private $uiList;

    /**
     * @var UXListView
     */
    private $uiMasterList;

    /**
     * @var ContextMenu
     */
    private $contextMenu;

    public function __construct(BackupProjectBehaviour $behaviour)
    {
        
    }

    public function getName()
    {
        
    }

    public function getDescription()
    {
        
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
    protected function makeUi()
    {
        
    }

    private function createContextCommands(UXListView $listView)
    {
        
    }

    private function createAutoActionPane(UXListView $listView)
    {
        
    }

    private function createMasterActionPane(UXListView $listView)
    {
        
    }

    /**
     * Refresh ui and pane.
     */
    public function refresh()
    {
        
    }
}