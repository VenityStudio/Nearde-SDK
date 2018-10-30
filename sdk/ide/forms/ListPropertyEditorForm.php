<?php
namespace ide\forms;

use ide\editors\value\BooleanPropertyEditor;
use ide\editors\value\ImagePropertyEditor;
use ide\editors\value\TextPropertyEditor;
use ide\forms\mixins\DialogFormMixin;
use ide\Ide;
use php\gui\designer\UXDesignProperties;
use php\gui\framework\AbstractForm;
use php\gui\layout\UXVBox;
use php\gui\UXApplication;
use php\gui\UXList;
use php\gui\UXListCell;
use php\gui\UXListView;
use php\gui\UXTab;
use php\lib\Items;

/**
 * Class ListPropertyEditorForm
 * @package ide\forms
 *
 * @property UXListView $list
 * @property UXVBox $propPane
 */
class ListPropertyEditorForm extends AbstractIdeForm
{
    use DialogFormMixin;

    /**
     * @var UXDesignProperties
     */
    protected $properties;

    protected function init()
    {
        
    }

    public function setList(UXList $list)
    {
        
    }

    public function setDefaultProperties()
    {
        
    }

    public function setAsTabs()
    {
        
    }

    public function setResult($result)
    {
        
    }

    /**
     * @event show
     */
    public function doShow()
    {
        
    }
}