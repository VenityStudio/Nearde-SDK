<?php
namespace ide\forms;
use ide\forms\mixins\DialogFormMixin;
use php\gui\UXLabel;
use php\gui\UXTextField;
use php\gui\UXTooltip;
use php\util\Regex;

/**
 * Class InputMessageBoxForm
 * @package ide\forms
 *
 * @property UXLabel $titleLabel
 * @property UXLabel $qLabel
 * @property UXLabel $helpLabel
 * @property UXTextField $edit
 */
class InputMessageBoxForm extends AbstractIdeForm
{
    use DialogFormMixin;

    /**
     * @var Regex
     */
    protected $pattern;

    /**
     * @var string
     */
    protected $patternErrorText;

    /**
     * @param string $title
     * @param string $question
     * @param string $helpText
     */
    public function __construct($title, $question, $helpText = '')
    {
        
    }

    /**
     * @param Regex $pattern
     * @param $errorText
     */
    public function setPattern(Regex $pattern, $errorText)
    {
        
    }

    /**
     * @event edit.keyUp-Enter
     * @event saveButton.action
     */
    public function doSave()
    {
        
    }

    /**
     * @event close
     * @event cancelButton.action
     */
    public function doCancel()
    {
        
    }
}