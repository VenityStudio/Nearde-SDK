<?php
namespace ide\forms;


use ide\forms\mixins\DialogFormMixin;
use ide\library\IdeLibraryResource;
use ide\project\Project;
use php\gui\framework\AbstractForm;
use php\gui\UXImageView;
use php\gui\UXTextArea;
use php\gui\UXTextField;

/**
 * Class SaveProjectForLibraryForm
 * @package ide\forms
 *
 * @property UXTextField $nameField
 * @property UXTextArea $descriptionField
 * @property UXImageView $icon
 */
class SaveProjectForLibraryForm extends AbstractIdeForm
{
    use DialogFormMixin;


    /**
     * SaveProjectForLibraryForm constructor.
     * @param IdeLibraryResource $resource
     */
    public function __construct(IdeLibraryResource $resource = null)
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
     * @event cancelButton.action
     */
    public function doCancel()
    {
        
    }

    /**
     * @event createButton.action
     */
    public function doSave()
    {
        
    }
}