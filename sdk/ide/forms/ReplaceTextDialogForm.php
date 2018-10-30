<?php
namespace ide\forms;

use ide\forms\mixins\DialogFormMixin;
use ide\forms\mixins\SavableFormMixin;
use ide\misc\EventHandlerBehaviour;
use php\gui\UXButton;
use php\gui\UXCheckbox;
use php\gui\UXImageView;
use php\gui\UXTextField;

/**
 * @package ide\forms
 *
 * @property UXImageView $icon
 * @property UXTextField $inputField
 * @property UXTextField $replaceField
 * @property UXCheckbox $wholeTextCheckbox
 * @property UXCheckbox $caseCheckbox
 * @property UXButton $skipButton
 */
class ReplaceTextDialogForm extends AbstractIdeForm
{
    use DialogFormMixin;
    use SavableFormMixin;

    /**
     * @var callable
     */
    protected $onSearch = null;

    /**
     * @param callable $onSearch
     */
    public function __construct(callable $onSearch)
    {
        
    }

    /**
     * @param array|null $result
     */
    public function setFindResult($result)
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

    public function getOptions()
    {
        
    }

    /**
     * @event inputField.keyUp
     */
    public function doStart()
    {
        
    }

    /**
     * @event replaceButton.action
     */
    public function doReplace()
    {
        
    }

    /**
     * @event replaceAllButton.action
     */
    public function doReplaceAll()
    {
        
    }

    /**
     * @event skipButton.action
     */
    public function doSkip()
    {
        
    }

    /**
     * @event cancelButton.action
     */
    public function doCancel()
    {
        
    }
}