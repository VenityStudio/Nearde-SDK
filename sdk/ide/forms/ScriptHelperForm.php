<?php
namespace ide\forms;

use behaviour\custom\EscapeShutdownBehaviour;
use ide\forms\mixins\DialogFormMixin;
use ide\forms\mixins\SavableFormMixin;
use ide\Ide;
use ide\library\IdeLibraryScriptGeneratorResource;
use ide\Logger;
use ide\ui\ListMenu;
use php\gui\event\UXMouseEvent;
use php\gui\layout\UXHBox;
use php\gui\layout\UXTilePane;
use php\gui\layout\UXVBox;
use php\gui\UXForm;
use php\gui\UXImageView;
use php\gui\UXLabel;
use php\gui\UXListCell;
use php\gui\UXListView;
use php\gui\UXTextField;
use php\lib\str;

/**
 * Class ScriptHelperForm
 * @package ide\forms
 *
 * @property UXImageView $icon
 * @property UXVBox $dialogContainer
 * @property UXListView $list
 * @property UXTextField $searchField
 */
class ScriptHelperForm extends AbstractIdeForm
{
    use DialogFormMixin;
    use SavableFormMixin;

    /**
     * @var string
     */
    protected $context;

    /**
     * @var array
     */
    protected $model;

    /**
     * @var string
     */
    private $param;

    /**
     * @var IdeLibraryScriptGeneratorResource[]
     */
    private $resources;

    /**
     * ScriptHelperForm constructor.
     * @param string $context
     * @param array $model
     * @param string $param
     */
    public function __construct($context, array $model = [], $param = '')
    {
        
    }

    public function init()
    {
        
    }

    /**
     * @event showing
     */
    public function doShowing()
    {
        
    }

    /**
     * @event searchField.keyUp
     * @event searchBtn.action
     */
    public function doSearch()
    {
        
    }

    /**
     * @event genButton.action
     */
    public function doGen()
    {
        
    }

    /**
     * @event cancelButton.action
     */
    public function doCancel()
    {
        
    }

    /**
     * @param IdeLibraryScriptGeneratorResource[] $resources
     */
    public function setResources(array $resources)
    {
        
    }

    public function displayList($searchQuery = null)
    {
        
    }
}