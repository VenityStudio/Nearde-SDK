<?php
namespace ide\forms;

use ide\bundle\AbstractBundle;
use ide\forms\mixins\DialogFormMixin;
use ide\forms\mixins\SavableFormMixin;
use ide\Ide;
use ide\IdeConfiguration;
use ide\library\IdeLibraryBundleResource;
use ide\project\behaviours\BundleProjectBehaviour;
use ide\project\Project;
use ide\ui\ListMenu;
use php\gui\layout\UXAnchorPane;
use php\gui\layout\UXHBox;
use php\gui\layout\UXVBox;
use php\gui\UXButton;
use php\gui\UXCheckbox;
use php\gui\UXDialog;
use php\gui\UXFileChooser;
use php\gui\UXImageView;
use php\gui\UXLabel;
use php\gui\UXListCell;
use php\gui\UXListView;
use php\gui\UXTab;
use php\gui\UXTabPane;
use php\gui\UXWebView;
use php\lang\Thread;
use php\lib\fs;
use php\lib\reflect;
use php\lib\str;

/**
 * Class BundleCheckListForm
 * @package ide\forms
 *
 * @property UXTabPane $tabs
 * @property UXAnchorPane $content
 * @property UXImageView $iconImage
 * @property UXLabel $titleLabel
 * @property UXLabel $descriptionLabel
 * @property UXListView $list
 * @property UXImageView $icon
 * @property UXHBox $excludePane
 * @property UXButton $addButton
 * @property UXLabel $installedLabel
 * @property UXWebView $fullDescription
 */
class BundleDetailInfoForm extends AbstractIdeForm
{
    use DialogFormMixin;
    use SavableFormMixin;

    /**
     * @var IdeLibraryBundleResource
     */
    protected $displayResource;

    /**
     * @var BundleProjectBehaviour
     */
    private $behaviour;

    /**
     * @var UXCheckbox[]
     */
    protected $checkboxes = [];

    /**
     * @var ListMenu[]
     */
    protected $tabLists = [];

    /**
     * @var callable
     */
    protected $updateHandler;

    public function __construct(BundleProjectBehaviour $behaviour)
    {
        
    }

    protected function init()
    {
        
    }

    /**
     * @param callable $callback
     */
    public function onUpdate(callable $callback)
    {
        
    }

    /**
     * @event showing
     */
    public function doShowing()
    {
        
    }

    /**
     * @event cancelButton.action
     */
    public function doCancel()
    {
        
    }

    /**
     * @event addButton.action
     */
    public function doInstall()
    {
        
    }

    public function update()
    {
        
    }

    /**
     * @event removeButton.action
     */
    public function doUninstall()
    {
        
    }

    /**
     * @event deleteBundle.action
     */
    public function deleteBundle()
    {
        
    }

    public function display(IdeLibraryBundleResource $resource = null)
    {
        
    }
}