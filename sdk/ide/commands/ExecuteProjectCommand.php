<?php
namespace ide\commands;

use facade\Async;
use framework\core\EventSignal;
use ide\editors\AbstractEditor;
use ide\forms\BuildProgressForm;
use ide\Ide;
use ide\Logger;
use ide\misc\AbstractCommand;
use ide\misc\EventHandlerBehaviour;
use ide\project\behaviours\RunBuildProjectBehaviour;
use ide\project\Project;
use ide\project\ProjectConsoleOutput;
use ide\systems\FileSystem;
use ide\systems\ProjectSystem;
use ide\ui\Notifications;
use ide\utils\FileUtils;
use php\gui\event\UXEvent;
use php\gui\framework\ScriptEvent;
use php\gui\UXButton;
use php\gui\UXDialog;
use php\gui\UXRichTextArea;
use php\io\File;
use php\io\IOException;
use php\io\Stream;
use php\lang\IllegalStateException;
use php\lang\Process;
use php\lang\Thread;
use php\lang\ThreadPool;
use php\lib\arr;
use php\lib\fs;
use php\lib\number;
use php\lib\Str;
use php\time\Time;
use process\ProcessHandle;
use script\TimerScript;
use timer\AccurateTimer;

class ExecuteProjectCommand extends AbstractCommand
{
    /** @var BuildProgressForm */
    protected $processDialog;
    /** @var UXButton */
    protected $startButton;
    /** @var UXButton */
    protected $stopButton;

    /** @var Process */
    protected $process;

    /**
     * @var RunBuildProjectBehaviour
     */
    protected $behaviour;

    /**
     * @var EventSignal
     */
    public $onRun;

    /**
     * @var EventSignal
     */
    public $onStop;

    /**
     * @param RunBuildProjectBehaviour $behaviour
     */
    function __construct(RunBuildProjectBehaviour $behaviour)
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

    public function getCategory()
    {
        
    }

    public function makeUiForHead()
    {
        
    }

    public function isRunning()
    {
        
    }

    public function onStopExecute(UXEvent $e = null, callable $callback = null)
    {
        
    }

    protected function createExecuteProcess(Project $project): Process
    {
        
    }

    public function onExecute($e = null, AbstractEditor $editor = null)
    {
        
    }
}