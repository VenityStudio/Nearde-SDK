<?php
namespace ide\editors\argument;

use ide\editors\common\FormListEditor;
use ide\editors\common\ObjectListEditor;
use ide\editors\common\ObjectListEditorItem;
use ide\editors\FormEditor;
use ide\editors\ScriptModuleEditor;
use ide\Ide;
use php\gui\layout\UXHBox;
use php\gui\UXApplication;
use php\gui\UXComboBox;
use php\gui\UXListCell;
use php\gui\UXNode;
use php\gui\UXTextField;

class MixedArgumentEditor extends AbstractArgumentEditor
{
    /** @var  UXHBox */
    protected $box;

    /** @var UXTextField */
    protected $input;

    /** @var UXComboBox */
    protected $typeSelect;

    /** @var ObjectListEditor */
    protected $objectListEditor;

    /** @var ObjectListEditor */
    protected $instancesListEditor;

    /** @var ObjectListEditor */
    protected $formListEditor;

    /**
     * @return ObjectListEditor
     */
    public function getObjectListEditor()
    {
        
    }

    /**
     * @return ObjectListEditor
     */
    public function getFormListEditor()
    {
        
    }


    public function getCode()
    {
        
    }

    protected function valueTypes()
    {
        
    }

    protected function valueTypeLabels()
    {
        
    }

    protected function makeObjectListUi()
    {
        
    }

    protected function makeFormListUi()
    {
        
    }

    protected function makeInstancesListUi()
    {
        
    }

    /**
     * @param null $label
     * @return UXNode
     */
    public function makeUi($label = null)
    {
        
    }

    public function updateUi()
    {
        
    }

    public function update()
    {
        
    }

    public function setValue($value, $type)
    {
        
    }

    public function getValue()
    {
        
    }

    public function getValueType()
    {
        
    }

    public function requestUiFocus()
    {
        
    }
}