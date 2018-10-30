<?php

namespace ide\project\behaviours\bundle;

use ide\forms\BundleDetailInfoForm;
use ide\forms\InputMessageBoxForm;
use ide\forms\MessageBoxForm;
use ide\Ide;
use ide\IdeConfiguration;
use ide\library\IdeLibraryBundleResource;
use ide\Logger;
use ide\misc\AbstractCommand;
use ide\project\behaviours\BundleProjectBehaviour;
use ide\project\control\AbstractProjectControlPane;
use ide\project\Project;
use ide\systems\Cache;
use ide\systems\FileSystem;
use ide\systems\IdeSystem;
use ide\systems\ProjectSystem;
use ide\ui\FlowListViewDecorator;
use ide\ui\ImageBox;
use ide\ui\ImageExtendedBox;
use ide\utils\FileUtils;
use ide\utils\UiUtils;
use php\compress\ZipException;
use php\compress\ZipFile;
use php\gui\event\UXMouseEvent;
use php\gui\layout\UXHBox;
use php\gui\layout\UXVBox;
use php\gui\UXButton;
use php\gui\UXDialog;
use php\gui\UXFileChooser;
use php\gui\UXHyperlink;
use php\gui\UXLabel;
use php\gui\UXNode;
use php\gui\UXSeparator;
use php\gui\UXTextField;
use php\io\File;
use php\io\IOException;
use php\io\Stream;
use php\lang\Thread;
use php\lib\fs;
use php\lib\str;

class BundlesProjectControlPane extends AbstractProjectControlPane
{
    /**
     * @var array
     */
    protected $groups = [
        'all' => 'Все',
        'game' => 'Игра',
        'network' => 'Интернет, сеть',
        'database' => 'Данные',
        'system' => 'Система',
        'other' => 'Другое',
    ];

    protected $groupIcons = [
        'all' => 'icons/all16.png',
        'game' => 'icons/gameMonitor16.png',
        'network' => 'icons/web16.png',
        'database' => 'icons/database16.png',
        'system' => 'icons/system16.png',
        'other' => 'icons/blocks16.png',
    ];

    /**
     * @var UXHyperlink[]
     */
    protected $groupLinks = [];

    /**
     * @var BundleProjectBehaviour
     */
    protected $behaviour;

    /**
     * @var FlowListViewDecorator
     */
    protected $availableBundleListPane;

    /**
     * @var FlowListViewDecorator
     */
    protected $projectBundleListPane;

    /**
     * BundlesProjectControlPane constructor.
     * @param BundleProjectBehaviour $behaviour
     */
    public function __construct(BundleProjectBehaviour $behaviour)
    {
        
    }

    public function getName()
    {
        
    }

    public function getDescription()
    {
        
    }

    function getMenuCount()
    {
        
    }

    public function getIcon()
    {
        
    }

    /**
     * @return UXNode
     */
    protected function makeUi()
    {
        
    }

    private function makeActionPaneUi()
    {
        
    }

    private function makeItemUi(IdeLibraryBundleResource $resource)
    {
        
    }

    private function makeExtendedItemUi(IdeLibraryBundleResource $resource)
    {
        
    }

    public function showBundleDialog(IdeLibraryBundleResource $resource)
    {
        
    }

    public function addBundle($file, callable $callback = null)
    {
        
    }

    public function addBundleFile()
    {
        
    }

    public function addBundleUrl()
    {
        
    }

    /**
     * Refresh ui and pane.
     * @param string $groupCode
     * @param null $searchText
     */
    public function refresh($groupCode = 'all', $searchText = null)
    {
        
    }
}