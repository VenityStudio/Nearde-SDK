<?php
namespace ide\forms;

use ide\forms\mixins\DialogFormMixin;
use ide\forms\mixins\SavableFormMixin;
use ide\misc\EventHandlerBehaviour;
use php\gui\UXCheckbox;
use php\gui\UXImageView;
use php\gui\UXTextField;

/**
 * Class FindTextDialogForm
 * @package ide\forms
 *
 * @property UXImageView $icon
 * @property UXTextField $inputField
 * @property UXCheckbox $wholeTextCheckbox
 * @property UXCheckbox $caseCheckbox
 */
class FindTextDialogForm extends AbstractIdeForm
{
    use DialogFormMixin;
    use SavableFormMixin;

    /**
     * @var callable
     */
    protected $onSearch = null;

    /**
     * FindTextDialogForm constructor.
     * @param callable $onSearch
     */
    public function __construct(callable $onSearch)
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
     * @event inputField.keyDown-Enter
     * @event searchButton.action
     */
    public function doSearch()
    {
        
    }

    /**
     * @event cancelButton.action
     */
    public function doCancel()
    {
        
    }
}