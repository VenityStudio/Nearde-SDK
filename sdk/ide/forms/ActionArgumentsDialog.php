<?php
namespace ide\forms;

use ide\action\AbstractSimpleActionType;
use ide\action\Action;
use ide\editors\argument\AbstractArgumentEditor;
use ide\forms\mixins\DialogFormMixin;
use ide\Ide;
use php\gui\framework\AbstractForm;
use php\gui\layout\UXPanel;
use php\gui\layout\UXVBox;
use php\gui\paint\UXColor;
use php\gui\text\UXFont;
use php\gui\UXApplication;
use php\gui\UXButton;
use php\gui\UXImage;
use php\gui\UXImageView;
use php\gui\UXLabel;
use php\gui\UXLabelEx;
use php\lib\items;

/**
 * Class ActionArgumentsDialog
 * @package ide\forms
 *
 * @property UXButton $okButton
 * @property UXButton $cancelButton
 * @property UXLabel $titleLabel
 * @property UXLabel $descriptionLabel
 * @property UXImageView $icon
 *
 * @property UXVBox $box
 */
class ActionArgumentsDialog extends AbstractIdeForm
{
    use DialogFormMixin;

    /**
     * @var AbstractArgumentEditor[]
     */
    protected $argumentEditors = [];

    public function updateAction(Action $action, $isNew = false)
    {
        
    }

    public function setAction(Action $action, $isNew = false)
    {
        
    }

    protected function fitHeight()
    {
        
    }

    /**
     * @event show
     * @event showing
     */
    public function doShowing()
    {
        
    }

    public function addHelpText($text)
    {
        
    }

    public function addArgument($name, $label, $type, array $settings = null)
    {
        
    }

    /**
     * @event okButton.action
     */
    public function actionApply()
    {
        
    }

    /**
     * @event cancelButton.action
     * @event close
     */
    public function actionClose()
    {
        
    }
}