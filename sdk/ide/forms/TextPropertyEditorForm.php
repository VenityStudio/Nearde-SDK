<?php
namespace ide\forms;

use ide\forms\mixins\DialogFormMixin;
use ide\forms\mixins\SavableFormMixin;
use ide\Ide;
use ide\utils\UiUtils;
use php\gui\event\UXEvent;
use php\gui\framework\AbstractForm;
use php\gui\UXButton;
use php\gui\UXClipboard;
use php\gui\UXTextArea;
use php\gui\UXTooltip;

/**
 * Class TextPropertyEditorForm
 * @package ide\forms
 *
 * @property UXTextArea $textArea
 * @property UXButton $applyButton
 * @property UXButton $cancelButton
 */
class TextPropertyEditorForm extends AbstractIdeForm
{
    use DialogFormMixin;
    //use SavableFormMixin;

    protected function init()
    {
        
    }

    /**
     * @event copyButton.action
     */
    public function actionCopy(UXEvent $e)
    {
        
    }

    /**
     * @event show
     */
    public function actionOpen()
    {
        
    }

    /**
     * @event applyButton.action
     */
    public function actionApply()
    {
        
    }

    /**
     * @event cancelButton.action
     */
    public function actionCancel()
    {
        
    }
}