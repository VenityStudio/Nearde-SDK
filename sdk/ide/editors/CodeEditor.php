<?php
namespace ide\editors;

use develnext\lexer\inspector\AbstractInspector;
use Files;
use ide\autocomplete\AutoComplete;
use ide\autocomplete\php\PhpAutoComplete;
use ide\autocomplete\ui\AutoCompletePane;
use ide\editors\menu\ContextMenu;
use ide\forms\AbstractIdeForm;
use ide\forms\CodeEditorSettingsForm;
use ide\forms\FindTextDialogForm;
use ide\forms\MessageBoxForm;
use ide\forms\ReplaceTextDialogForm;
use ide\Ide;
use ide\Logger;
use ide\misc\AbstractCommand;
use ide\misc\EventHandlerBehaviour;
use ide\project\behaviours\PhpProjectBehaviour;
use ide\project\Project;
use ide\scripts\AbstractScriptComponent;
use ide\systems\FileSystem;
use ide\utils\FileUtils;
use ide\utils\Json;
use ide\utils\UiUtils;
use function is_array;
use function is_string;
use php\format\JsonProcessor;
use php\gui\designer\UXAbstractCodeArea;
use php\gui\designer\UXCodeAreaScrollPane;
use php\gui\designer\UXCssCodeArea;
use php\gui\designer\UXFxCssCodeArea;
use php\gui\designer\UXJavaScriptCodeArea;
use php\gui\designer\UXPhpCodeArea;
use php\gui\designer\UXSyntaxAutoCompletion;
use php\gui\designer\UXSyntaxTextArea;
use php\gui\designer\UXTextCodeArea;
use php\gui\event\UXKeyEvent;
use php\gui\layout\UXAnchorPane;
use php\gui\layout\UXHBox;
use php\gui\layout\UXVBox;
use php\gui\text\UXFont;
use php\gui\UXApplication;
use php\gui\UXCheckbox;
use php\gui\UXClipboard;
use php\gui\UXContextMenu;
use php\gui\UXDesktop;
use php\gui\UXDialog;
use php\gui\UXForm;
use php\gui\UXLabel;
use php\gui\UXListView;
use php\gui\UXMenuItem;
use php\gui\UXNode;
use php\gui\UXPopupWindow;
use php\gui\UXTooltip;
use php\gui\UXWebEngine;
use php\gui\UXWebView;
use php\io\File;
use php\io\IOException;
use php\io\ResourceStream;
use php\io\Stream;
use php\lang\IllegalArgumentException;
use php\lang\IllegalStateException;
use php\lang\JavaException;
use php\lib\Char;
use php\lib\fs;
use php\lib\Items;
use php\lib\Mirror;
use php\lib\Str;
use php\net\URLConnection;
use php\time\Time;
use php\util\Scanner;
use script\TimerScript;

/**
 * Class CodeEditor
 * @package ide\editors
 */
class CodeEditor extends AbstractEditor
{
    const USE_NEW_EDITOR = true;

    use EventHandlerBehaviour;

    protected $mode;

    /**
     * @var UXVBox
     */
    protected $ui;

    /**
     * @var bool
     */
    protected $lockHandlers = false;

    /**
     * @var null|array
     */
    protected $editableArea = null;

    /**
     * @var array
     */
    protected $doOnSucceed = [];

    /**
     * @var AbstractCommand[]
     */
    protected $commands = [];

    /**
     * @var UXSyntaxTextArea|UXAbstractCodeArea
     */
    protected $textArea;

    /**
     * @var UXCodeAreaScrollPane
     */
    protected $textAreaScrollPane;

    /**
     * @var AutoCompletePane
     */
    protected $autoComplete;


    /**
     * @var FindTextDialogForm
     */
    protected $findDialog;

    /**
     * @var ReplaceTextDialogForm
     */
    protected $replaceDialog;

    /**
     * @var bool
     */
    protected $sourceFile = false;

    /**
     * @var int
     */
    protected $findDialogLastIndex = 0;

    /**
     * @var bool
     */
    protected $contentLoaded = false;

    /**
     * @var UXHBox
     */
    protected $statusBar;

    /**
     * @var bool
     */
    protected $embedded = false;

    /**
     * @return UXAbstractCodeArea|UXSyntaxTextArea
     */
    public function getTextArea()
    {
        
    }

    /**
     * @return boolean
     */
    public function isSourceFile()
    {
        
    }

    /**
     * @param boolean $sourceFile
     */
    public function setSourceFile($sourceFile)
    {
        
    }

    /**
     * CodeEditor constructor.
     * @param string $file
     * @param string $mode
     * @param array $options
     */
    public function __construct($file, $mode = 'php', $options = array())
    {
        
    }

    /**
     * @return AutoCompletePane
     */
    public function getAutoComplete()
    {
        
    }

    public function close($save = true)
    {
        
    }

    public function leave()
    {
        
    }

    /**
     * @return bool
     */
    public function isEmbedded()
    {
        
    }

    /**
     * @param bool $embedded
     */
    public function setEmbedded($embedded)
    {
        
    }

    public function getFindDialog()
    {
        
    }

    public function getReplaceDialog()
    {
        
    }

    public function setReadOnly($value)
    {
        
    }

    public function installAutoCompletion(UXSyntaxAutoCompletion $completion)
    {
        
    }

    /**
     * @param $any
     *
     * @throws IllegalArgumentException
     */
    public function register($any)
    {
        
    }

    public $__eventUpdates = 0;

    /**
     * Trigger change content.
     * @param bool $now
     */
    public function doChange($now = false)
    {
        
    }

    public function executeCommand($command)
    {
        
    }

    public function getTitle()
    {
        
    }

    public function jumpToLine($line, $offset = 0)
    {
        
    }

    public function getValue()
    {
        
    }

    public function setValue($value)
    {
        
    }

    public function loadContentToAreaIfModified()
    {
        
    }

    public function open($param = null)
    {
        
    }

    public function loadContentToArea($resetHistory = true)
    {
        
    }

    public function load($resetHistory = true)
    {
        
    }

    public function save()
    {
        
    }

    /**
     * @return UXNode
     */
    public function makeUi()
    {
        
    }

    public function refreshUi()
    {
        
    }

    public function makeLeftPaneUi()
    {
        
    }

    public function registerDefaultCommands()
    {
        
    }

    public function requestFocus()
    {
        
    }

    protected function _findSearchText(AbstractIdeForm $dialog, $text, array $options, $silent = false)
    {
        
    }

    protected function findSearchText($text, array $options)
    {
        
    }

    protected function replaceSearchText($text, $newText, $options, $command)
    {
        
    }

    public function showFindDialog()
    {
        
    }

    public function showReplaceDialog()
    {
        
    }

    public function jumpToLineSpaceOffset($beginLine)
    {
        
    }

    /**
     * @return string
     */
    public function getMode()
    {
        
    }

    /**
     * @return array|null
     */
    public function getCaretBounds()
    {
        
    }

    public function sendMessage($message)
    {
        
    }


    /**
     * Reset default settings.
     */
    public function resetSettings()
    {
        
    }

    /**
     * @param string $name
     */
    public function setHighlight($name)
    {
       
    }

    /**
     * @param int $size
     */
    public function setFontSize($size)
    {
        
    }

    /**
     * @param $lang
     * @param $size
     */
    public static function setCurrentFontSize($lang, $size)
    {
        
    }

    /**
     * @return int
     */
    public static function getCurrentFontSize($lang)
    {
        
    }

    /**
     * @param string $lang
     * @return \php\io\File[]
     */
    public static function getHighlightFiles($lang)
    {
        
    }

    /**
     * @param $lang
     * @param $name
     * @return File
     */
    public static function getHighlightFile($lang, $name)
    {
        
    }

    public static function getHighlight($name)
    {
        
    }

    /**
     * @param string $lang
     * @return string
     */
    public static function getCurrentHighlight($lang)
    {
        
    }

    /**
     * @param $lang
     * @param $value
     */
    public static function setCurrentHighlight($lang, $value)
    {

    }
}