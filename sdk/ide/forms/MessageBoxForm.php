<?php
namespace ide\forms;

use function flow;
use ide\forms\mixins\DialogFormMixin;
use ide\Ide;
use ide\utils\UiUtils;
use php\gui\framework\AbstractForm;
use php\gui\layout\UXHBox;
use php\gui\UXApplication;
use php\gui\UXButton;
use php\gui\UXCheckbox;
use php\gui\UXControl;
use php\gui\UXForm;
use php\gui\UXImageView;
use php\gui\UXLabel;
use php\gui\UXNode;
use php\gui\UXWindow;
use php\lib\str;

/**
 * @property UXHBox $buttonBox
 * @property UXLabel $messageLabel
 * @property UXImageView $icon
 *
 * @property UXCheckbox $flag
 *
 * Class MessageBoxForm
 * @package ide\forms
 */
class MessageBoxForm extends AbstractIdeForm
{
    use DialogFormMixin {
        showDialog as private _showDialog;
    }

    /** @var string */
    protected $text;

    /** @var array */
    protected $buttons = [];

    /** @var int */
    protected $indexResult = -1;

    /**
     * @var mixed
     */
    protected $iconImage;

    /**
     * @param string $text
     * @param array $buttons
     * @param null $owner
     */
    public function __construct($text, array $buttons, $owner = null)
    {
        
    }

    public function makeWarning()
    {
        
    }

    protected function init()
    {
        
    }

    public function isChecked()
    {
        
    }

    public function showDialogWithFlag()
    {
        
    }

    public function showWarningDialog($x = null, $y = null)
    {
        
    }

    public function showDialog($x = null, $y = null)
    {
        
    }

    /**
     * @return int
     */
    public function getResultIndex()
    {
        
    }

    /**
     * @event showing
     */
    public function doOpen()
    {
        
    }

    static function confirm($message, $owner = null)
    {
        
    }

    static function confirmDelete($what, $owner = null)
    {
        
    }

    static function confirmExit($owner = null)
    {
        
    }

    static function warning($message, $owner = null)
    {
        
    }
}