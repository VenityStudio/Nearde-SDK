<?php
namespace ide\forms;

use ide\behaviour\AbstractBehaviourSpec;
use ide\behaviour\IdeBehaviourManager;
use ide\forms\mixins\DialogFormMixin;
use ide\forms\mixins\SavableFormMixin;
use ide\Ide;
use ide\utils\UiUtils;
use php\gui\framework\AbstractForm;
use php\gui\layout\UXHBox;
use php\gui\layout\UXVBox;
use php\gui\UXApplication;
use php\gui\UXDialog;
use php\gui\UXImageView;
use php\gui\UXLabel;
use php\gui\UXListCell;
use php\gui\UXListView;
use php\gui\UXTab;
use php\gui\UXTabPane;
use php\lib\arr;
use php\lib\Items;
use php\util\SharedValue;

/**
 * Class BehaviourCreateForm
 * @package ide\forms
 *
 * @property UXImageView $icon
 * @property UXTabPane $categoryTabPane
 * @property UXListView $list
 */
class BehaviourCreateForm extends AbstractIdeForm
{
    use DialogFormMixin;
    use SavableFormMixin;

    /**
     * @var null
     */
    protected static $selectedTabName = null;

    /**
     * @var IdeBehaviourManager
     */
    protected $behaviourManager;

    /**
     * @var AbstractBehaviourSpec[]
     */
    protected $alreadyAddedBehaviours = [];

    /**
     * @var mixed
     */
    protected $target;

    /**
     * BehaviourCreateForm constructor.
     * @param IdeBehaviourManager $behaviourManager
     * @param null $target
     */
    public function __construct(IdeBehaviourManager $behaviourManager, $target = null)
    {
        
    }

    /**
     * @param AbstractBehaviourSpec[] $alreadyAddedBehaviours
     */
    public function setAlreadyAddedBehaviours(array $alreadyAddedBehaviours)
    {
        
    }

    protected function init()
    {
        
    }

    /**
     * @event hide
     */
    public function doHide()
    {
        
    }

    /**
     * @event showing
     */
    public function doShow()
    {
        
    }

    public function updateList()
    {
        
    }

    /**
     * @event list.click-2x
     * @event addButton.action
     */
    public function doAdd()
    {
        
    }

    /**
     * @event cancelButton.action
     */
    public function doCancel()
    {
        
    }
}