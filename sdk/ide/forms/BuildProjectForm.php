<?php
namespace ide\forms;

use ide\build\AbstractBuildType;
use ide\forms\mixins\SavableFormMixin;
use ide\Ide;
use ide\Logger;
use ide\utils\UiUtils;
use php\gui\event\UXMouseEvent;
use php\gui\framework\AbstractForm;
use php\gui\layout\UXHBox;
use php\gui\layout\UXVBox;
use php\gui\UXButton;
use php\gui\UXDialog;
use php\gui\UXHyperlink;
use php\gui\UXLabel;
use php\gui\UXListCell;
use php\gui\UXListView;
use php\lib\Items;

/**
 * Class BuildProjectForm
 * @package ide\forms
 *
 * @property UXListView $list
 * @property UXButton
 */
class BuildProjectForm extends AbstractIdeForm
{
    use SavableFormMixin;

    /**
     * @var AbstractBuildType[]
     */
    protected $buildTypes = [];

    public function setBuildTypes($buildTypes)
    {
        
    }

    protected function init()
    {
        
    }

    /**
     * @event show
     */
    public function doShow()
    {
        
    }

    /**
     * @event cancelButton.action
     */
    public function doCancelButtonClick()
    {
        
    }

    /**
     * @param UXMouseEvent $e
     * @event list.click
     */
    public function doListClick(UXMouseEvent $e)
    {
        
    }

    /**
     * @event buildButton.action
     */
    public function doBuildButtonClick()
    {
        
    }
}