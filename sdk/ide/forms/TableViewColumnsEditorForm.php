<?php
namespace ide\forms;

use ide\editors\value\BooleanPropertyEditor;
use ide\editors\value\ElementPropertyEditor;
use ide\editors\value\IntegerPropertyEditor;
use ide\editors\value\PositionPropertyEditor;
use ide\editors\value\SimpleTextPropertyEditor;
use ide\editors\value\TextPropertyEditor;
use ide\forms\mixins\DialogFormMixin;
use ide\forms\mixins\SavableFormMixin;
use ide\Ide;
use php\gui\designer\UXDesignProperties;
use php\gui\event\UXDragEvent;
use php\gui\event\UXEvent;
use php\gui\layout\UXVBox;
use php\gui\UXDialog;
use php\gui\UXImageView;
use php\gui\UXList;
use php\gui\UXListCell;
use php\gui\UXListView;
use php\gui\UXTableColumn;
use php\lib\arr;
use php\lib\str;
use php\util\Regex;

/**
 * Class TableViewColumnsEditorForm
 * @package ide\forms
 *
 * @property UXImageView $icon
 * @property UXListView $list
 * @property UXVBox $content
 */
class TableViewColumnsEditorForm extends AbstractIdeForm
{
    use DialogFormMixin;
    use SavableFormMixin;

    /**
     * @var UXDesignProperties
     */
    protected $properties;

    /**
     * @var bool
     */
    protected $constrainedResizePolicy = false;

    /**
     * TableViewColumnsEditorForm constructor.
     */
    public function __construct()
    {
        
    }

    /**
     * @return boolean
     */
    public function isConstrainedResizePolicy()
    {
        
    }

    /**
     * @param boolean $constrainedResizePolicy
     */
    public function setConstrainedResizePolicy($constrainedResizePolicy)
    {
        
    }

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
     * @event removeButton.action
     */
    public function doDelete()
    {
        
    }

    /**
     * @event clearButton.action
     */
    public function doClear()
    {
        
    }

    /**
     * @event close
     * @event closeButton.action
     */
    public function doClose()
    {
        
    }

    /**
     * @event addButton.action
     */
    public function doAdd()
    {
        
    }
}