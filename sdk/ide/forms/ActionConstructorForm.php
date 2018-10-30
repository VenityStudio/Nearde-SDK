<?php
namespace ide\forms;

use Dialog;
use ide\action\AbstractActionType;
use ide\action\AbstractSimpleActionType;
use ide\action\Action;
use ide\action\ActionEditor;
use ide\action\ActionScript;
use ide\editors\AbstractEditor;
use ide\editors\CodeEditor;
use ide\editors\FormEditor;
use ide\editors\menu\ContextMenu;
use ide\formats\PhpCodeFormat;
use ide\forms\mixins\DialogFormMixin;
use ide\forms\mixins\SavableFormMixin;
use ide\Ide;
use ide\misc\AbstractCommand;
use ide\utils\PhpParser;
use ide\utils\UiUtils;
use php\format\ProcessorException;
use php\gui\designer\UXPhpCodeArea;
use php\gui\event\UXDragEvent;
use php\gui\event\UXEvent;
use php\gui\event\UXKeyEvent;
use php\gui\event\UXMouseEvent;
use php\gui\layout\UXAnchorPane;
use php\gui\layout\UXFlowPane;
use php\gui\layout\UXHBox;
use php\gui\layout\UXScrollPane;
use php\gui\layout\UXVBox;
use php\gui\text\UXFont;
use php\gui\UXApplication;
use php\gui\UXButton;
use php\gui\UXCheckbox;
use php\gui\UXClipboard;
use php\gui\UXComboBox;
use php\gui\UXDialog;
use php\gui\UXForm;
use php\gui\UXLabel;
use php\gui\UXListCell;
use php\gui\UXListView;
use php\gui\UXSplitPane;
use php\gui\UXTab;
use php\gui\UXTabPane;
use php\lib\Items;
use php\lib\Str;
use php\util\Flow;
use php\xml\XmlProcessor;
use function var_dump;

/**
 * Class ActionConstructorForm
 * @package ide\forms
 *
 * @property UXListView $list
 * @property UXTabPane $actionTypePane
 * @property UXAnchorPane $generatedCodeContent
 * @property UXAnchorPane $codeContent
 * @property UXTabPane $tabs
 * @property UXCheckbox $useDefaultCheckbox
 * @property UXSplitPane $constructorSplitPane
 * @property UXComboBox $actionTypePaneViewCombobox
 */
class ActionConstructorForm extends AbstractIdeForm
{
    use DialogFormMixin;
    use SavableFormMixin;
    //use EventHandlerBehaviour;

    /**
     * @var ActionEditor
     */
    protected $editor;

    /**
     * @var FormEditor
     */
    protected $contextEditor;

    /**
     * @var CodeEditor
     */
    protected $liveCodeEditor;

    /** @var string */
    protected $class;

    /** @var string */
    protected $method;

    /**
     * @var array
     */
    protected $context;

    protected static $tabSelectedIndex = -1;
    protected static $globalTabSelectedIndex = 0;

    /**
     * @var bool
     */
    protected $onlyIcons = false;

    /**
     * @return array
     */
    public function getContext()
    {
        
    }

    /**
     * @param array $context
     */
    public function setContext($context)
    {
        
    }

    public function setDefaultEventEditor($editor)
    {
        
    }

    public function setOnlyIcons($value, $updateUi = true)
    {
        
    }

    public function isOnlyIcons()
    {
        
    }

    protected function init()
    {
        
    }

    protected function listDragOver(UXDragEvent $e)
    {
        
    }

    protected function listDragDone(UXDragEvent $e)
    {
        
    }

    protected function listDragDrop(UXDragEvent $e)
    {
        
    }

    protected function listCellDragDone(UXDragEvent $e, UXListView $list, $index)
    {
        
    }

    protected function listCellFactory(UXListCell $cell, Action $action = null, $empty)
    {
        
    }

    public function updateList()
    {
        
    }

    public function setContextEditor(AbstractEditor $editor = null)
    {
        
    }

    /**
     * @return FormEditor
     */
    public function getContextEditor()
    {
        
    }

    /**
     * @return CodeEditor
     */
    public function getLiveCodeEditor()
    {
        
    }

    public function setLiveCode($value, $beginLine = 0, $beginPosition = 0)
    {
        
    }

    public function getLiveCode()
    {
        
    }

    public function showAndWait(ActionEditor $editor = null, $class = null, $method = null)
    {
        
    }

    public function buildActionTypePane(ActionEditor $editor)
    {
        
    }

    public function getAndShowActionType($typeClass)
    {
        
    }

    private function addActionType(AbstractActionType $actionType, &$buildTabs, &$subGroups)
    {
        
    }


    /**
     * @param UXEvent|null $e
     */
    protected function actionDelete(UXEvent $e = null)
    {
        
    }

    /**
     * @param UXMouseEvent|null $e
     * @event list.click
     */
    public function actionEdit(UXMouseEvent $e = null)
    {
        
    }

    public function addAction(AbstractSimpleActionType $actionType, $index = -1)
    {
        
    }

    protected function actionTypeClick(UXEvent $e)
    {
        
    }

    /**
     * @event hide
     */
    public function hide()
    {
        
    }

    /**
     * @event clearButton.action
     */
    public function actionClear()
    {
        
    }

    /**
     * @event previewButton.action
     */
    public function actionPreview()
    {
        
    }

    /**
     * @event saveButton.action
     */
    public function actionSave()
    {
        
    }

    /**
     * @event close
     * @event cancelButton.action
     */
    public function actionCancel()
    {
        
    }

    /**
     * @event convertButton.action
     */
    public function actionConvert()
    {
        
    }

    public function actionPaste()
    {
        
    }

    public function actionCopy()
    {
        
    }
}