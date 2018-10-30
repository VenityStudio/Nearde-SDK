<?php
namespace ide\editors\argument;

use ide\editors\common\ObjectListEditorButtonRender;
use ide\editors\common\ObjectListEditorItem;
use ide\Ide;
use php\gui\layout\UXHBox;
use php\gui\UXComboBox;
use php\gui\UXListCell;
use php\gui\UXNode;

/**
 * Class EnumArgumentEditor
 * @package ide\editors\argument
 */
class EnumArgumentEditor extends AbstractArgumentEditor
{
    /**
     * @var UXComboBox
     */
    protected $list;

    /**
     * @var bool
     */
    protected $noneItem = '...';

    /**
     * @return string
     */
    public function getCode()
    {
        
    }

    public function disableNoneItem()
    {
        
    }


    /**
     * @return mixed
     */
    public function updateUi()
    {
        
    }

    /**
     * @param null $label
     * @return UXNode
     */
    public function makeUi($label = null)
    {
        
    }

    public function requestUiFocus()
    {
        
    }

    public function setValue($value, $type)
    {
        
    }

    private function setSelected($value)
    {
        
    }

    public function getValue()
    {
        
    }
}