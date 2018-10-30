<?php
namespace ide\systems;

use ide\editors\AbstractEditor;
use ide\editors\form\IdeTabPane;
use ide\editors\menu\ContextMenu;
use ide\forms\MainForm;
use ide\Ide;
use ide\Logger;
use ide\utils\FileUtils;
use ide\utils\Json;
use ide\utils\UiUtils;
use php\gui\event\UXEvent;
use php\gui\event\UXMouseEvent;
use php\gui\layout\UXAnchorPane;
use php\gui\layout\UXScrollPane;
use php\gui\UXApplication;
use php\gui\UXButton;
use php\gui\UXContextMenu;
use php\gui\UXDialog;
use php\gui\UXDndTabPane;
use php\gui\UXForm;
use php\gui\UXSplitPane;
use php\gui\UXTab;
use php\gui\UXMenu;
use php\gui\UXTabPane;
use php\io\File;
use php\lib\arr;
use php\lib\fs;
use php\lib\Items;
use timer\AccurateTimer;

class FileSystem
{
    /**
     * @var AbstractEditor[]
     */
    static protected $openedEditors = [];

    /**
     * @var AbstractEditor[]
     */
    static protected $cachedEditors = [];

    /**
     * @var UXTab
     */
    static protected $addTab;

    /**
     * @var callable
     */
    static protected $addTabClick;

    /**
     * @var UXTab[]
     */
    static protected $openedTabs = [];

    /**
     * @var array
     */
    static protected $openedFiles = [];

    /**
     * @var UXForm[]
     */
    static protected $openedWindows = [];

    /**
     * @var AbstractEditor
     */
    static protected $previousEditor = null;

    /**
     * @var bool
     */
    static protected $freeze = false;

    /**
     * @var array
     */
    static protected $editorContentDividePosition;

    /**
     * ..
     */
    static function clearCache()
    {
        static::$cachedEditors = [];
    }

    /**
     * @return UXForm[]
     */
    public static function getOpenedWindows()
    {
        
    }



    /**
     * @param $path
     * @param null $param
     */
    static function refresh($path, $param = null)
    {
        
    }

    /**
     * @param $path
     * @param null $param
     * @return AbstractEditor|null
     */
    static function openOrRefresh($path, $param = null)
    {
        
    }

    /**
     * @return array
     */
    static function getOpened()
    {
        
    }

    /**
     * @return AbstractEditor[]
     */
    static function getOpenedEditors()
    {
        
    }

    /**
     * @param $file
     * @return AbstractEditor
     */
    static function getOpenedEditor($file)
    {
        
    }

    /**
     * @return UXTab[]
     */
    public static function getOpenedTabs()
    {
        
    }

    /**
     * @param string $path
     *
     * @return bool
     */
    static function isOpened($path)
    {
        
    }

    /**
     * @param string $path
     * @return bool
     */
    static function isOpenedAndSelected($path)
    {
        
    }

    /**
     * @param string $path
     * @return bool
     */
    static function isTabbed($path)
    {
        
    }

    /**
     * ...
     */
    static function saveAll()
    {
        
    }

    /**
     * @return null|string
     */
    static function getSelected()
    {
        
    }

    /**
     * @return AbstractEditor|null
     */
    static function getSelectedEditor()
    {
        
    }

    /**
     * @param $path
     * @param bool $cache
     * @return AbstractEditor|null
     */
    static function fetchEditor($path, $cache = false)
    {
        
    }

    static public function _openEditor($editor, $param = null)
    {
        
    }

    static private $editorSplitDividerWidth = 250;

    static private function makeUiForEditor(AbstractEditor $editor, $type = 'tab')
    {
        
    }

    static private function makeWindowForEditor(AbstractEditor $editor)
    {
        
    }

    static private function makeTabForEditor(AbstractEditor $editor)
    {
        
    }

    static function switchToWindow($path)
    {
        
    }

    /**
     * @param $path
     * @param bool $switchToEditor
     * @param null $param
     * @param bool $inWindow
     * @return AbstractEditor|null
     */
    static function open($path, $switchToEditor = true, $param = null, $inWindow = false)
    {
        
    }

    static function closeAllTabs()
    {
        
    }

    static function close($path, $removeUiEditor = true, $save = true)
    {
        
    }

    static function setClickOnAddTab(callable $callback = null)
    {
        
    }

    private static function addTab(UXTab $tab, $prepend = false)
    {
        
    }

    private static function hideAddTab()
    {
        
    }

    private static function showAddTab()
    {
        
    }

    /**
     * Open next tab (it's for Ctrl + Tab)
     */
    public static function openNext()
    {
        
    }
}