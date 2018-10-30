<?php
namespace ide\forms;

use ide\editors\common\FormListEditor;
use ide\editors\common\ObjectListEditorButtonRender;
use ide\editors\common\ObjectListEditorCellRender;
use ide\forms\mixins\DialogFormMixin;
use ide\project\behaviours\GuiFrameworkProjectBehaviour;
use php\gui\event\UXEvent;
use php\gui\UXComboBox;
use php\gui\UXDialog;
use php\gui\UXListView;

/**
 * Class SetMainFormForm
 * @package ide\forms
 *
 * @property UXComboBox $list
 */
class SetMainFormForm extends AbstractIdeForm
{
    use DialogFormMixin;

    /**
     * @var array
     */
    protected $excludes = [];

    /**
     * @param array $names
     */
    public function setExcludedForms(array $names)
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
     * @event close
     * @param UXEvent $e
     */
    public function doClose(UXEvent $e)
    {
        
    }

    /**
     * @event saveButton.action
     */
    public function doSave()
    {
        
    }
}