<?php
namespace ide\forms;

use ide\commands\CreateScriptModuleProjectCommand;
use ide\forms\mixins\DialogFormMixin;
use ide\Ide;
use ide\project\behaviours\GuiFrameworkProjectBehaviour;
use ide\utils\FileUtils;
use php\gui\framework\AbstractForm;
use php\gui\UXButton;
use php\gui\UXCheckbox;
use php\gui\UXListCell;
use php\gui\UXListView;
use php\gui\UXTextArea;
use php\lib\fs;
use php\lib\Items;
use php\util\Flow;

/**
 *
 * @property UXListView $list
 * @property UXButton $saveButton
 * @property UXButton $cancelButton
 */
class ModuleListEditorForm extends AbstractIdeForm
{
    use DialogFormMixin;

    protected $checkboxes = [];

    protected function init()
    {
        
    }

    /**
     * @event show
     */
    public function actionOpen()
    {
        
    }

    /**
     * @event saveButton.action
     */
    public function actionSave()
    {
        
    }

    /**
     * @event createModuleButton.action
     */
    public function actionCreateModuleButton()
    {
        
    }

    /**
     * @event cancelButton.action
     */
    public function actionCancel()
    {
        
    }
}