<?php
namespace ide\utils;
use ide\editors\menu\ContextMenu;
use ide\Logger;
use ide\misc\SeparatorCommand;
use php\gui\event\UXKeyEvent;
use php\gui\layout\UXAnchorPane;
use php\gui\layout\UXHBox;
use ide\misc\AbstractCommand;
use php\gui\layout\UXPane;
use php\gui\layout\UXVBox;
use php\gui\UXApplication;
use php\gui\UXComboBox;
use php\gui\UXMenuButton;
use php\gui\UXNode;
use php\gui\UXProgressIndicator;
use php\gui\UXScreen;
use php\gui\UXSeparator;
use php\gui\UXTooltip;
use php\gui\UXWindow;
use php\lib\str;

/**
 * Class UiUtils
 * @package ide\utils
 */
class UiUtils
{
    private function __construct() {}

    static function fontSizeStyle()
    {
        
    }

    /**
     * Размер шрифта по-умолчанию учитывая DPI экрана.
     * @return int
     */
    static function fontSize()
    {
        
    }

    /**
     * @param AbstractCommand[] $commands
     * @param bool $horizontal
     *
     * @return UXHBox|UXVBox
     */
    static function makeCommandPane(array $commands, $horizontal = true)
    {
        
    }

    /**
     * @var UXNode|UXWindow
     */
    private static $lastFocusedUi = null;


    /**
     * @param UXNode|UXWindow|UXTooltip $ui
     */
    static function setWatchingFocusable($ui)
    {
        
    }

    /**
     * @param UXNode|UXWindow $ui
     */
    static function setUiHidingOnUnfocus($ui)
    {
        
    }

    static function tooltip($text)
    {
        
    }

    static function checkIO($message)
    {
        
    }

    static function makeAutoCompleteComboBox(UXComboBox $comboBox, callable $findCallback = null)
    {
        
    }
}