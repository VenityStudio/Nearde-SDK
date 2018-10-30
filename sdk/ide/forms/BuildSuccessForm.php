<?php
namespace ide\forms;

use ide\Ide;
use ide\Logger;
use php\gui\UXDesktop;
use php\gui\framework\AbstractForm;
use php\gui\UXButton;
use php\gui\UXDialog;
use php\gui\UXImageView;
use php\gui\UXTextField;
use php\io\File;
use php\io\IOException;
use php\lang\Process;
use php\lib\fs;
use php\lib\str;

/**
 * Class BuildSuccessForm
 * @package ide\forms
 *
 * @property UXImageView $icon
 * @property UXButton $runButton
 * @property UXButton $openButton
 * @property UXButton $exitButton
 * @property UXTextField $pathField
 */
class BuildSuccessForm extends AbstractIdeForm
{
    /**
     * @var callable
     */
    protected $onRun;

    /**
     * @var callable
     */
    protected $onOpenDirectory;

    /**
     * @var string
     */
    protected $buildPath;

    protected function init()
    {
        
    }

    /**
     * @param callable $onRun
     */
    public function setOnRun($onRun)
    {
        
    }

    /**
     * @param callable $onOpenDirectory
     */
    public function setOnOpenDirectory($onOpenDirectory)
    {
        
    }

    public function setRunProgram($pathToProgram)
    {
        
    }

    public function setOpenDirectory($path)
    {
        
    }

    /**
     * @param string $buildPath
     */
    public function setBuildPath($buildPath)
    {
        
    }

    /**
     * @event show
     */
    public function doShow()
    {
        
    }

    /**
     * @event exitButton.action
     */
    public function doExitClick()
    {
        
    }

    /**
     * @event runButton.action
     */
    public function doRunClick()
    {
        
    }

    /**
     * @event openButton.action
     */
    public function doOpenClick()
    {
        
    }
}