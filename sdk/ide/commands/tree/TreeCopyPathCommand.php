<?php
namespace ide\commands\tree;

use ide\editors\AbstractEditor;
use ide\editors\menu\AbstractMenuCommand;
use ide\forms\MessageBoxForm;
use ide\Ide;
use ide\project\ProjectTree;
use ide\systems\FileSystem;
use ide\utils\FileUtils;
use php\gui\UXClipboard;
use php\gui\UXDesktop;
use php\gui\UXDialog;
use php\lang\Process;
use php\lib\fs;
use php\lib\str;

class TreeCopyPathCommand extends AbstractMenuCommand
{
    protected $tree;

    /**
     * @var bool
     */
    private $asRes;

    public function __construct(ProjectTree $tree, $asRes = false)
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