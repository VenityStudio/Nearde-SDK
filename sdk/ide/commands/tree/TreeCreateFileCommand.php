<?php
namespace ide\commands\tree;

use ide\editors\AbstractEditor;
use ide\editors\menu\AbstractMenuCommand;
use ide\forms\InputMessageBoxForm;
use ide\project\ProjectTree;
use ide\systems\FileSystem;
use ide\utils\FileUtils;
use php\gui\UXDialog;
use php\lib\fs;
use php\util\Regex;

class TreeCreateFileCommand extends AbstractMenuCommand
{
    protected $tree;

    public function __construct(ProjectTree $tree)
    {
        
    }

    public function getIcon()
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