<?php
namespace ide\forms;
use ide\editors\CodeEditor;
use ide\forms\mixins\DialogFormMixin;
use ide\forms\mixins\SavableFormMixin;
use ide\Ide;
use php\gui\UXComboBox;
use php\gui\UXImageView;
use php\gui\UXLabel;
use php\gui\UXListCell;
use php\gui\UXSlider;
use php\lang\IllegalArgumentException;
use php\lib\arr;
use php\lib\fs;

/**
 * Class CodeEditorSettingsForm
 * @package ide\forms
 *
 * @property UXImageView $icon
 * @property UXSlider $fontSizeSlider
 * @property UXComboBox $themeList
 * @property UXLabel $titleLabel
 * @property UXComboBox $importType
 */
class CodeEditorSettingsForm extends AbstractIdeForm
{
    use DialogFormMixin;
    use SavableFormMixin;

    /**
     * @var string
     */
    protected $lang;

    /**
     * @var CodeEditor
     */
    protected $editor;

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

    /**
     * @return CodeEditor
     */
    public function getEditor()
    {
        
    }

    /**
     * @param CodeEditor $editor
     */
    public function setEditor($editor)
    {
        
    }

    /**
     * @return string
     */
    public function getLang()
    {
        
    }

    /**
     * @param string $lang
     */
    public function setLang($lang)
    {
        
    }
}