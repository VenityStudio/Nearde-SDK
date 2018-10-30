<?php
namespace ide\editors\common;


use ide\editors\AbstractEditor;
use ide\editors\FormEditor;
use ide\editors\ScriptModuleEditor;
use ide\Ide;
use ide\Logger;
use ide\systems\FileSystem;
use ide\utils\FileUtils;
use php\gui\UXComboBox;
class ObjectListEditor
{
    /** @var UXComboBox */
    protected $comboBox;

    /** @var AbstractEditor|null */
    protected $editor;

    /** @var bool */
    protected $disableDependencies = false;

    /**
     * @var callable[]
     */
    protected $filters = [];

    /**
     * @var callable
     */
    protected $onChange = null;

    /**
     * @var string
     */
    protected $senderCode;

    /**
     * @var string
     */
    protected $targetCode;

    /**
     * @var bool
     */
    protected $enableAllForms;

    protected $cacheItems = null;

    protected $disableForms;

    /**
     * @var string
     */
    protected $emptyItemText = '...';

    /**
     * @var bool
     */
    protected $enableAppModule = true;

    /**
     * @var bool
     */
    protected $disableModules = false;

    /**
     * @var bool
     */
    protected $stringValues = false;

    /**
     * @var string
     */
    protected $formMethod = 'form';

    /**
     * @var string
     */
    protected $moduleMethod = 'module';

    /**
     * ObjectListEditor constructor.
     * @param AbstractEditor $editor
     * @param array $filters
     */
    public function __construct(AbstractEditor $editor = null, array $filters = [])
    {
        
    }

    /**
     * @return string
     */
    public function getEmptyItemText()
    {
        
    }

    /**
     * @param string $emptyItemText
     */
    public function setEmptyItemText($emptyItemText)
    {
       
    }

    public function disableAppModule()
    {
        
    }

    public function disableDependencies()
    {
        
    }

    public function disableForms()
    {
        
    }

    public function disableModules()
    {
        
    }

    public function stringValues()
    {
        
    }

    /**
     * @param string $formMethod
     * @return $this
     */
    public function formMethod($formMethod)
    {
        
    }

    public function enableSender($code = '~sender', $target = '~target')
    {
        
    }

    public function enableAllForms()
    {
        
    }

    public function build()
    {
        
    }

    /**
     * @param $filter (AbstractFormElement $element, UXNode $node)
     * @return $this
     */
    public function addFilter($filter)
    {
        
    }

    protected function makeUi()
    {
        
    }

    public function setSelected($value)
    {
        
    }

    public function getSelected()
    {
        
    }

    public function onChange(callable $handle)
    {
        
    }

    /**
     * @return UXComboBox
     */
    public function getUi()
    {
        
    }

    public function isFiltered(ObjectListEditorItem $item)
    {
        
    }

    protected $comboBoxItems = [];

    public function addItem(ObjectListEditorItem $item)
    {
        
    }

    public function updateUi()
    {
        
    }

    protected function appendFormEditor(FormEditor $formEditor, $level = 0, $prefix = '')
    {
        
    }

    public function clearCache()
    {
        
    }
}