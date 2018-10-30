<?php
namespace ide\forms;

use ide\forms\mixins\SavableFormMixin;
use ide\Ide;
use ide\Logger;
use ide\project\ProjectConsoleOutput;
use ide\systems\FileSystem;
use php\gui\designer\UXCodeAreaScrollPane;
use php\gui\designer\UXRichTextArea;
use php\gui\event\UXEvent;
use php\gui\event\UXMouseEvent;
use php\gui\event\UXWindowEvent;
use php\gui\framework\AbstractForm;
use php\gui\layout\UXHBox;
use php\gui\layout\UXVBox;
use php\gui\paint\UXColor;
use php\gui\text\UXFont;
use php\gui\UXApplication;
use php\gui\UXButton;
use php\gui\UXCheckbox;
use php\gui\UXDialog;
use php\gui\UXImageView;
use php\gui\UXLabel;
use php\gui\UXListCell;
use php\gui\UXListView;
use php\io\IOException;
use php\io\Stream;
use php\lang\Process;
use php\lang\Thread;
use php\lang\ThreadPool;
use php\lib\char;
use php\lib\str;
use php\util\Regex;
use php\util\Scanner;
use php\util\SharedQueue;

/**
 * @property UXImageView $icon
 * @property UXListView $consoleList
 * @property UXCheckbox $closeAfterDoneCheckbox
 * @property UXButton $closeButton
 * @property UXRichTextArea $consoleArea
 * @property UXHBox $bottomPane
 * @property UXLabel $message
 *
 * Class BuildProgressForm
 * @package ide\forms
 */
class BuildProgressForm extends AbstractIdeForm implements ProjectConsoleOutput
{
    use SavableFormMixin;

    /**
     * @var Process
     */
    protected $process;

    /**
     * @var bool
     */
    protected $processDone = false;

    /** @var callable */
    protected $onExitProcess;

    /** @var callable */
    protected $stopProcedure;

    /** @var SharedQueue */
    protected $tasks;

    /**
     * @var bool
     */
    protected $ignoreExit1 = false;

    protected function init()
    {
        
    }

    /**
     * @return bool
     */
    public function isIgnoreExit1(): bool
    {
        
    }

    /**
     * @param bool $ignoreExit1
     */
    public function setIgnoreExit1(bool $ignoreExit1)
    {
        
    }

    public function reduceHeader()
    {
        
    }

    public function reduceFooter()
    {
        
    }

    public function removeHeader()
    {
        
    }

    public function removeProgressbar()
    {
        
    }

    /**
     * @param array $tasksOrProcesses
     */
    public function watchProcesses(array $tasksOrProcesses)
    {
        
    }

    public function show(Process $process = null)
    {
        
    }

    public function hide()
    {
        
    }

    /**
     * @event closeAfterDoneCheckbox.click
     */
    public function doCloseAfterDoneCheckboxMouseDown()
    {
        
    }

    public function watchProcess(Process $process, callable $onExit = null)
    {
        
    }

    /**
     * @param callable $onExitProcess
     */
    public function setOnExitProcess($onExitProcess)
    {
        
    }

    /**
     * @param callable $stopProcedure
     */
    public function setStopProcedure($stopProcedure)
    {
        
    }

    /**
     * @event show
     */
    public function doOpen()
    {
        
    }

    /**
     * @event close
     * @event closeButton.action
     *
     * @param UXEvent $e
     */
    public function doClose(UXEvent $e)
    {
        
    }

    /**
     * @param $line
     * @param string $color
     */
    public function addConsoleLine($line, $color = '#333333')
    {
        
    }

    public function addConsoleText($text, $color = null)
    {
        
    }

    /**
     * @param \Exception $e
     */
    public function stopWithException(\Exception $e)
    {
        
    }

    public function stopWithError()
    {
        
    }

    /**
     * @param Process $process
     * @param callable $onExit
     *
     */
    public function doProgress(Process $process, callable $onExit = null)
    {
        
    }
}