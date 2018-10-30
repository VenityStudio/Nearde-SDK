<?php

namespace ide\commands;

use function alert;
use function dump;
use function flow;
use framework\core\Promise;
use ide\editors\AbstractEditor;
use ide\forms\BuildProgressForm;
use ide\Ide;
use ide\Logger;
use ide\misc\AbstractCommand;
use ide\project\Project;
use ide\systems\FileSystem;
use ide\systems\ProjectSystem;
use php\gui\event\UXEvent;
use php\gui\layout\UXHBox;
use php\gui\UXComboBox;
use php\gui\UXContextMenu;
use php\gui\UXLabel;
use php\gui\UXListCell;
use php\gui\UXMenuItem;
use php\gui\UXSplitMenuButton;
use php\lang\Process;
use const PHP_INT_MAX;
use function pre;
use process\ProcessHandle;
use function sizeof;
use function uiLater;
use function uiLaterAndWait;
use function var_dump;

class RunTaskCommand extends AbstractCommand
{
    private $taskSelect;
    private $stopButton;

    /**
     * @var UXHBox
     */
    private $panel;

    /**
     * @var UXContextMenu
     */
    private $menu;

    /**
     * RunTaskCommand constructor.
     */
    public function __construct()
    {
        
    }

    public function update(?Project $project = null)
    {
        
    }

    protected function cellRender(): callable
    {
        
    }

    protected function buttonRender(): callable
    {
        
    }

    public function getName()
    {
        
    }

    public function getAccelerator()
    {
        
    }

    public function onExecute($e = null, AbstractEditor $editor = null)
    {
        
    }

    public function getIcon()
    {
        
    }

    public function isAlways()
    {
        
    }

    public function makeUiForHead()
    {
        
    }

    public function makeMenuItem()
    {
        
    }
}