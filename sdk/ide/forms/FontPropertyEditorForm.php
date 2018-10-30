<?php
namespace ide\forms;

use ide\forms\mixins\DialogFormMixin;
use ide\utils\UiUtils;
use InvalidArgumentException;
use php\gui\framework\AbstractForm;
use php\gui\text\UXFont;
use php\gui\UXButton;
use php\gui\UXComboBox;
use php\gui\UXLabel;
use php\gui\UXListCell;
use php\gui\UXSlider;
use php\gui\UXTextField;
use php\gui\UXToggleButton;
use php\lib\str;
use php\util\Flow;

/**
 * Class FontPropertyEditorForm
 * @package ide\forms
 *
 * @property UXComboBox $fontCombobox
 * @property UXSlider $sizeSlider
 * @property UXTextField $sizeField
 * @property UXButton $genCssButton
 * @property UXComboBox $customFontCombobox
 * @property UXButton $addFontButton
 * @property UXLabel $testLabel
 *
 * @property UXToggleButton $thinWeightButton
 * @property UXToggleButton $italicBoldWeightButton
 * @property UXToggleButton $italicButton
 * @property UXToggleButton $boldWeightButton
 */
class FontPropertyEditorForm extends AbstractIdeForm
{
    use DialogFormMixin;

    private $freeze = false;

    protected function init()
    {
        
    }

    protected function updateTestText()
    {
        
    }

    /**
     * @event show
     */
    public function actionOpen()
    {
        
    }

    public function getFont()
    {
        
    }

    /**
     * @event genCssButton.action
     */
    public function actionGenStyle()
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