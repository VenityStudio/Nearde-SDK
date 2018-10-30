<?php
namespace ide\forms;

use ide\forms\mixins\DialogFormMixin;
use php\gui\UXClipboard;
use php\gui\UXLabel;
use php\gui\UXTextArea;
use php\gui\UXTextField;
use php\lib\str;

/**
 * Class ShowTextDialogForm
 * @package ide\forms
 *
 * @property UXTextField $field
 * @property UXTextArea $area
 * @property UXLabel $label
 */
class ShowTextDialogForm extends AbstractIdeForm
{
    use DialogFormMixin;

    /**
     * ShowTextDialogForm constructor.
     * @param string $label
     * @param string $text
     * @param bool $readOnly
     */
    public function __construct($label, $text, $readOnly = false)
    {
        
    }

    /**
     * @event okButton.action
     */
    public function doOk()
    {
        
    }

    /**
     * @event copyButton.action
     */
    public function doCopy()
    {
        
    }
}