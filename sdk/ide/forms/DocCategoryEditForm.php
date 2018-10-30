<?php
namespace ide\forms {

    use ide\editors\common\CodeTextArea;
    use ide\forms\mixins\DialogFormMixin;
    use ide\forms\mixins\SavableFormMixin;
    use ide\misc\EventHandler;
    use ide\misc\EventHandlerBehaviour;
    use php\gui\layout\UXAnchorPane;
    use php\gui\UXComboBox;
    use php\gui\UXTextArea;
    use php\gui\UXTextField;

    /**
     * @package ide\forms
     *
     * @property UXTextField $nameField
     * @property UXTextArea $descriptionField
     * @property UXTextField $weightField
     */
    class DocCategoryEditForm extends AbstractIdeForm
    {
        use DialogFormMixin;

        /**
         * @var EventHandler
         */
        public $events;

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
         * @event saveButton.action
         */
        public function doSave()
        {
            
        }

        /**
         * @event applyButton.action
         */
        public function doApply()
        {
            
        }

        public function updateUi()
        {
            
        }
    }
}