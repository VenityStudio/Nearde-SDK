<?php
namespace ide\commands\tree;

use ide\editors\AbstractEditor;
use ide\editors\FormEditor;
use ide\editors\menu\AbstractMenuCommand;
use ide\formats\AbstractFormFormat;
use ide\forms\ScriptHelperForm;
use ide\Ide;
use ide\project\ProjectTree;
use php\gui\UXMenuItem;
use php\gui\UXNode;
use php\lib\arr;
use php\lib\fs;
use php\lib\items;
use php\lib\str;

class TreeScriptHelperMenuCommand extends AbstractMenuCommand
{
    /**
     * @var ProjectTree
     */
    private $tree;

    /**
     * ScriptHelperMenuCommand constructor.
     * @param ProjectTree $tree
     */
    public function __construct(ProjectTree $tree)
    {
        
    }


    public function getName()
    {
        
    }

    public function getAccelerator()
    {
        
    }


    public function getIcon()
    {
        
    }

    public function onExecute($e = null, AbstractEditor $editor = null)
    {
        
    }

    public function onBeforeShow(UXMenuItem $item, AbstractEditor $editor = null)
    {

    }

    public function withBeforeSeparator()
    {
        
    }
}