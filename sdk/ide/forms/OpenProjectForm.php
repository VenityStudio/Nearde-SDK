<?php
namespace ide\forms;

use ide\forms\mixins\DialogFormMixin;
use ide\forms\mixins\SavableFormMixin;
use ide\Ide;
use ide\library\IdeLibraryProjectResource;
use ide\library\IdeLibraryResource;
use ide\Logger;
use ide\project\Project;
use ide\project\ProjectConfig;
use ide\systems\DialogSystem;
use ide\systems\FileSystem;
use ide\systems\ProjectSystem;
use ide\ui\FlowListViewDecorator;
use ide\ui\ImageBox;
use ide\ui\Notifications;
use ide\utils\FileUtils;
use ide\utils\UiUtils;
use php\gui\event\UXEvent;
use php\gui\event\UXMouseEvent;
use php\gui\framework\AbstractForm;
use php\gui\framework\Preloader;
use php\gui\layout\UXAnchorPane;
use php\gui\layout\UXHBox;
use php\gui\layout\UXScrollPane;
use php\gui\layout\UXVBox;
use php\gui\UXApplication;
use php\gui\UXButton;
use php\gui\UXDialog;
use php\gui\UXDirectoryChooser;
use php\gui\UXFileChooser;
use php\gui\UXForm;
use php\gui\UXHyperlink;
use php\gui\UXImageView;
use php\gui\UXLabel;
use php\gui\UXListCell;
use php\gui\UXListView;
use php\gui\UXTabPane;
use php\gui\UXTextField;
use php\io\File;
use php\lang\Thread;
use php\lib\arr;
use php\lib\fs;
use php\lib\Items;
use php\lib\Str;
use php\time\Time;

/**
 *
 * @property UXImageView $icon
 * @property UXScrollPane $projectList
 * @property UXTextField $pathField
 * @property UXButton $openButton
 * @property UXTabPane $tabPane
 * @property UXListView $libraryList
 * @property UXListView $sharedList
 * @property UXListView $embeddedLibraryList
 * @property UXAnchorPane $sharedPane
 * @property UXTextField $projectQueryField
 * @property UXButton $projectSearchButton
 *
 * Class OpenProjectForm
 * @package ide\forms
 */
class OpenProjectForm extends AbstractIdeForm
{
    use DialogFormMixin;
    use SavableFormMixin;

    /**
     * @var FlowListViewDecorator
     */
    protected $projectListHelper;

    protected $_sharedList;

    /**
     * @param null $tab
     */
    public function __construct($tab = null)
    {
        parent::__construct();
    }

    public function init()
    {
        
    }

    public function update(string $searchText = '')
    {
        
    }

    /**
     * @event showing
     */
    public function doShowing()
    {
        
    }

    /**
     * @event openButton.action
     */
    public function doOpenButtonClick()
    {
        
    }

    /**
     * @param $nodes
     * @return bool
     */
    public function doRemove(array $nodes)
    {
        
    }

    /**
     * @event projectQueryField.keyUp
     * @event projectSearchButton.action
     */
    public function doSearchProject()
    {
        
    }

    /**
     * @param UXMouseEvent $e
     */
    public function doProjectListClick(UXMouseEvent $e)
    {
        
    }

    /**
     * @event pathButton.click
     */
    public function doChoosePath()
    {
        
    }

    /**
     * @event embeddedLibraryList.click-2x
     * @event libraryList.click-2x
     * @param UXEvent $e
     */
    public function doCreate(UXEvent $e)
    {
        
    }

    public function doDelete(UXEvent $e)
    {
        
    }

    public function selectLibraryResource(IdeLibraryResource $resource)
    {
        
    }
}