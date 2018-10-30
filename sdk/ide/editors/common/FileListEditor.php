<?php
namespace ide\editors\common;
use Dialog;
use ide\forms\MessageBoxForm;
use ide\Ide;
use ide\systems\DialogSystem;
use ide\ui\Notifications;
use ide\utils\FileUtils;
use php\gui\layout\UXVBox;
use php\gui\layout\UXHBox;
use php\gui\UXCell;
use php\gui\UXComboBox;
use php\gui\UXButton;
use php\gui\UXFileChooser;
use php\gui\UXImage;
use php\gui\UXListCell;
use php\io\File;
use php\lib\str;
use php\util\Flow;

/**
 * Class FileListEditor
 * @package ide\editors\common
 */
class FileListEditor extends UXVBox
{
    /**
     * @var string
     */
    protected $baseDir;

    /**
     * @var array
     */
    protected $extensions = [];

    /**
     * @var array
     */
    protected $originExtensions = [];

    /**
     * @var bool
     */
    protected $recursive;

    /**
     * @var mixed
     */
    protected $icon;

    /**
     * @var UXHBox
     */
    protected $ui;

    /**
     * @var UXComboBox
     */
    protected $uiCombobox;

    /**
     * @var UXButton
     */
    protected $uiAddButton;

    /**
     * @var UXButton
     */
    protected $uiRemoveButton;

    /**
     * @var UXFileChooser
     */
    protected $uiDialog;

    /**
     * @var string
     */
    private $extensionDescription;

    /**
     * FileListEditor constructor.
     * @param string $baseDir
     * @param $extensionDescription
     * @param array $extensions
     * @param bool $recursive
     */
    public function __construct($baseDir, $extensionDescription, array $extensions, $recursive = true)
    {
        
    }

    /**
     * @return mixed
     */
    public function getIcon()
    {
        
    }

    /**
     * @param mixed $icon
     */
    public function setIcon($icon)
    {
        
    }

    protected function init()
    {
        
    }

    public function doSelect()
    {
        
    }

    public function doAdd()
    {
        
    }

    public function doRemove()
    {
        
    }

    public function update()
    {
        
    }

    /**
     * @return string
     */
    public function getRelativeValue()
    {
        
    }

    /**
     * @return File|null
     */
    public function getValue()
    {
        
    }

    /**
     * @param $value
     */
    public function setRelativeValue($value)
    {
        
    }

    public function setValue($newFile)
    {
        
    }
}