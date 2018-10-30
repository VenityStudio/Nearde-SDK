<?php
namespace ide\project\behaviours\backup;

use ide\forms\AbstractIdeForm;
use ide\forms\mixins\DialogFormMixin;
use ide\forms\mixins\SavableFormMixin;
use ide\Ide;
use php\gui\event\UXMouseEvent;
use php\gui\UXCheckbox;
use php\gui\UXImageView;
use php\gui\UXSlider;

/**
 * Class BackupSettingsForm
 * @package ide\project\behaviours\backup
 *
 * @property UXCheckbox $autoCheckbox
 * @property UXCheckbox $autoCloseCheckbox
 * @property UXSlider $autoIntervalSlider
 * @property UXSlider $autoMaxSlider
 * @property UXSlider $autoSessionMaxSlider
 * @property UXImageView $icon
 */
class BackupSettingsForm extends AbstractIdeForm
{
    use DialogFormMixin;
    use SavableFormMixin;

    protected function init()
    {
        
    }

    /**
     * @event showing
     */
    public function doShowing()
    {
        
    }

    /**
     * @event autoCheckbox.click
     */
    public function doAutoClick()
    {
        
    }

    /**
     * @event autoIntervalSlider.mouseDrag
     * @event autoMaxSlider.mouseDrag
     * @event autoSessionMaxSlider.mouseDrag
     *
     * @param UXMouseEvent $e
     */
    public function doSliderFixValue(UXMouseEvent $e)
    {
        
    }

    /**
     * @event saveButton.action
     */
    public function doSave()
    {
        
    }

    /**
     * @event close
     * @event cancelButton.action
     */
    public function doCancel()
    {
        
    }
}