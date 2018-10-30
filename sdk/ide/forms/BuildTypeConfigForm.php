<?php
namespace ide\forms;

use ide\build\AbstractBuildType;
use ide\forms\mixins\DialogFormMixin;
use ide\Ide;
use php\gui\framework\AbstractForm;
use php\gui\framework\DataUtils;
use php\gui\framework\GUI;
use php\gui\layout\UXAnchorPane;
use php\gui\UXApplication;
use php\gui\UXCheckbox;
use php\gui\UXDialog;
use php\gui\UXImageView;
use php\gui\UXLoader;
use php\gui\UXNode;
use php\io\Stream;
use php\lib\Str;

/**
 * Class BuildTypeConfigForm
 * @package ide\forms
 *
 * @property UXCheckbox $showConfigCheckbox
 * @property UXImageView $icon
 */
class BuildTypeConfigForm extends AbstractIdeForm
{
    use DialogFormMixin;

    /**
     * @var string
     */
    private $innerForm;

    /**
     * @var UXAnchorPane
     */
    private $configLayout;

    /**
     * BuildTypeConfigForm constructor.
     *
     * @param string $innerForm
     */
    public function __construct($innerForm)
    {
        
    }

    public function init()
    {
        
    }

    public function applyForm(UXNode $node)
    {
        
    }

    /**
     * @return array
     */
    public function getData()
    {
        
    }

    /**
     * @param array $data
     */
    public function setData(array $data)
    {
        
    }

    /**
     * @event show
     */
    public function doShow()
    {
        
    }

    /**
     * @event saveButton.action
     */
    public function doSaveButtonClick()
    {
        
    }

    /**
     * @event cancelButton.action
     */
    public function doCancelButtonClick()
    {
        
    }
}