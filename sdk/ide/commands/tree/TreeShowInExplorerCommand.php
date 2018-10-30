<?php
namespace ide\commands\tree;

use ide\editors\AbstractEditor;
use ide\editors\menu\AbstractMenuCommand;
use ide\Ide;
use ide\project\ProjectTree;
use php\gui\UXDesktop;
use php\gui\UXDialog;
use php\lang\Process;
use php\lib\fs;

class TreeShowInExplorerCommand extends AbstractMenuCommand
{
    protected $tree;

    public function __construct(ProjectTree $tree)
    {
        
    }

    public function getName()
    {
        
    }

    public function onExecute($e = null, AbstractEditor $editor = null)
    {
        
    }

    public function onBeforeShow($item, AbstractEditor $editor = null)
    {
        
    }
}