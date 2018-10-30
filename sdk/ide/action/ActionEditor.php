<?php
namespace ide\action;

use ide\editors\FormEditor;
use ide\utils\FileUtils;
use php\gui\layout\UXAnchorPane;
use php\gui\UXCell;
use php\gui\UXListView;
use php\gui\UXLoader;
use ide\editors\AbstractEditor;
use php\gui\UXNode;
use php\io\File;
use php\io\FileStream;
use php\lib\Items;
use php\xml\DomDocument;
use php\xml\DomElement;
use php\xml\XmlProcessor;

/**
 * Class ActionConstructorPane
 * @package ide\editors\action
 */
class ActionEditor extends AbstractEditor
{
    /**
     * @var UXAnchorPane
     */
    protected $pane;

    /**
     * @var ActionScript
     */
    protected $container;

    /**
     * @var DomDocument
     */
    protected $document;

    /**
     * @var ActionManager
     */
    protected $manager;

    /**
     * @var DomDocument[]
     */
    protected $snapshots = [];

    /**
     * @var FormEditor
     */
    protected $formEditor;

    /**
     * ActionEditor constructor.
     * @param string $file
     * @param ActionManager $manager
     */
    public function __construct($file, ActionManager $manager = null)
    {
        
    }

    public function makeSnapshot()
    {
        
    }

    public function restoreSnapshot()
    {
        
    }

    public function clearSnapshots()
    {
        
    }

    /**
     * @return ActionManager
     */
    public function getManager()
    {
        
    }

    /**
     * @return UXAnchorPane
     */
    public function getPane()
    {
        
    }

    protected function recoverDocument()
    {
        
    }

    /**
     * @return FormEditor
     */
    public function getFormEditor()
    {
        
    }

    /**
     * @param FormEditor $formEditor
     */
    public function setFormEditor($formEditor)
    {
        
    }

    public function load()
    {
        
    }

    /**
     * @param $class
     * @param $method
     * @return Action[]
     */
    public function findMethod($class, $method)
    {
        
    }

    public function save()
    {
        
    }

    /**
     * @deprecated
     * @return UXNode
     */
    public function makeUi()
    {
        
    }

    /**
     * @param $class
     * @param $method
     * @return DomElement
     */
    public function fetchMethodDom($class, $method)
    {
        
    }

    public function removeMethod($class, $method)
    {
        
    }

    /**
     * @param Action[] $actions
     */
    public function calculateLevels(array $actions)
    {
        
    }

    /**
     * @param $class
     * @param $method
     * @param Action[] $actions
     */
    public function updateMethod($class, $method, array $actions)
    {
        
    }

    public function makeActionDom(Action $action, DomDocument $document)
    {
        
    }

    public function addAction(Action $action, $class, $method)
    {
        
    }

    public function removeActions($class, $method, ...$indexes)
    {
        
    }

    public function renameMethod($className, $methodName, $newMethodName)
    {
        
    }
}