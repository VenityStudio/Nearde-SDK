<?php
namespace ide\commands;

use develnext\lexer\inspector\PHPInspector;
use ide\autocomplete\AutoComplete;
use ide\autocomplete\php\PhpAutoComplete;
use ide\editors\AbstractEditor;
use ide\editors\CodeEditor;
use ide\Ide;
use ide\misc\AbstractCommand;
use ide\misc\SimpleSingleCommand;
use ide\systems\IdeSystem;
use ide\ui\UXError;
use ide\utils\FileUtils;
use ide\utils\UiUtils;
use php\gui\layout\UXAnchorPane;
use php\gui\layout\UXVBox;
use php\gui\text\UXFont;
use php\gui\UXForm;
use php\gui\UXTextArea;
use php\lang\Environment;
use php\lib\fs;

/**
 * @package ide\commands
 */
class IdeDebuggerCommand extends AbstractCommand
{
    /**
     * @var AbstractCommand
     */
    public $command;

    public function getName()
    {
        
    }

    public function getCategory()
    {
        
    }

    public function getIcon()
    {
        
    }

    public function onExecute($e = null, AbstractEditor $editor = null)
    {
        
    }

    public function isAlways()
    {
        
    }

    public function getAccelerator()
    {
        
    }
}