<?php
namespace ide\commands;

use ide\account\api\ServiceResponse;
use ide\editors\AbstractEditor;
use ide\forms\SharedProjectDetailForm;
use ide\forms\ShareProjectForm;
use ide\Ide;
use ide\Logger;
use ide\misc\AbstractCommand;
use ide\ui\Notifications;
use php\gui\UXApplication;
use php\gui\UXClipboard;
use php\gui\UXSeparator;
use php\lib\str;
use script\TimerScript;

/**
 * Class SaveProjectCommand
 * @package ide\commands
 */
class ShareProjectCommand extends AbstractProjectCommand
{
    /**
     * @var string
     */
    static public $lastCheckUid;

    /**
     * @var string
     */
    static public $lastCheckUidWithAnonymous;

    /**
     * @var bool
     */
    static protected $busy = false;

    /**
     * ShareProjectCommand constructor.
     */
    public function __construct()
    {
        
    }

    /**
     * @param string $lastCheckUid
     */
    public static function setLastCheckUid($lastCheckUid)
    {
        
    }

    public function getName()
    {
        
    }

    public function getIcon()
    {
        
    }

    public function getAccelerator()
    {
        
    }

    public function withBeforeSeparator()
    {
        
    }

    public function isAlways()
    {
        
    }

    public function makeMenuItem()
    {
        
    }

    public function makeUiForHead()
    {
        
    }

    public function onExecute($e = null, AbstractEditor $editor = null)
    {
        
    }
}