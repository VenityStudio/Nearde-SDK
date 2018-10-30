<?php
namespace ide\project\control;
use ide\forms\InputMessageBoxForm;
use ide\systems\FileSystem;
use php\gui\layout\UXScrollPane;
use php\gui\UXNode;
use php\gui\UXLoader;
use php\gui\framework\AbstractForm;
use php\io\Stream;
use php\gui\framework\EventBinder;
use php\gui\layout\UXVBox;
use php\gui\UXLabel;
use php\gui\layout\UXAnchorPane;
use ide\Ide;
use php\gui\UXApplication;
use php\io\File;
use ide\Logger;
use php\gui\UXSeparator;
use php\gui\UXDialog;
use ide\utils\FileUtils;
use php\gui\UXDesktop;
use php\util\Regex;

/**
 * Class CommonProjectControlPane
 * @package ide\project\control
 */
class CommonProjectControlPane extends AbstractProjectControlPane
{
    /**
     * @var UXVBox
     */
    protected $content;

    /**
     * @var UXLabel
     */
    protected $projectNameLabel;

    /**
     * @var UXLabel
     */
    protected $projectDirLabel;

    /**
     * @var bool
     */
    protected $init = false;

    public function getName()
    {
        
    }

    public function getDescription()
    {
        
    }

    public function getIcon()
    {
        
    }

    /**
     * @return UXNode
     */
    public function makeUi()
    {
        
    }

    /**
     * @param UXNode $node
     * @param bool $prepend
     * @return UXVBox|UXNode
     */
    public function addSettingsPane(UXNode $node, $prepend = true)
    {
        
    }

    /**
     * Refresh ui and pane.
     */
    public function refresh()
    {
        
    }

    /**
     * @event changeNameButton.action
     */
    public function doChangeProjectName()
    {
        
    }

    /**
     * @event openProjectDirButton.action
     */
    public function doOpenProjectDir()
    {
        
    }
}