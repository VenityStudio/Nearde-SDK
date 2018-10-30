<?php
namespace ide\editors;

use develnext\lexer\inspector\entry\ExtendTypeEntry;
use develnext\lexer\inspector\entry\TypeEntry;
use develnext\lexer\inspector\entry\TypePropertyEntry;
use ide\editors\form\FormNamedBlock;
use ide\formats\GuiFormDumper;
use ide\formats\ScriptModuleFormat;
use ide\Ide;
use ide\Logger;
use ide\project\behaviours\GuiFrameworkProjectBehaviour;
use ide\project\ProjectIndexer;
use ide\scripts\AbstractScriptComponent;
use ide\scripts\ScriptComponentContainer;
use ide\scripts\UnknownScriptComponent;
use ide\utils\FileUtils;
use ide\utils\Json;
use php\format\JsonProcessor;
use php\gui\designer\UXDesignPane;
use php\gui\event\UXMouseEvent;
use php\gui\framework\AbstractScript;
use php\gui\layout\UXAnchorPane;
use php\gui\UXLabel;
use php\gui\UXNode;
use php\lib\fs;
use php\lib\Items;
use php\lib\reflect;
use php\lib\Str;
use stdClass;

/**
 * Class ScriptModuleEditor
 * @package ide\editors
 *
 * @property ScriptModuleFormat $format
 */
class ScriptModuleEditor extends FormEditor
{
    /**
     * @var JsonProcessor
     */
    private $json;

    /**
     * Json from $name.module file
     * @var array
     */
    protected $meta = [];

    /**
     * @var ScriptComponentContainer[]
     */
    protected $components = [];

    /**
     * @var string
     */
    protected $metaFile;

    /**
     * @var array
     */
    protected $properties;

    public function __construct($file)
    {
        
    }

    public function isAppModule()
    {
        
    }

    public function getIcon()
    {
        
    }

    public function __set($name, $value)
    {
        
    }

    public function __get($name)
    {
        
    }

    protected function reindexImpl(ProjectIndexer $indexer)
    {
        
    }

    public function refresh()
    {
        
    }


    public function open()
    {
        
    }

    public function refreshInspectorType()
    {
        
    }

    public function save()
    {
        
    }

    public function addContainer(ScriptComponentContainer $container)
    {
        
    }

    protected function updateEmptyLabel()
    {
        
    }

    protected function loadComponent($id, array $cmpMeta)
    {
        
    }

    public function load()
    {
        
    }

    public function changeNodeId($container, $newId)
    {
        
    }

    public function getNodeId($node)
    {
        
    }

    protected function makeActionsUi(UXDesignPane $designPane)
    {
        
    }

    protected function makePrototypePane()
    {
        
    }

    protected function makeDesigner($fullArea = true)
    {
        
    }

    public function deleteNode($node)
    {
        
    }

    public function getModules()
    {
        
    }

    /**
     * @return ScriptComponentContainer[]
     */
    public function getComponents()
    {
        
    }

    public function getModuleName()
    {
        
    }

    protected $forms = [];

    /**
     * @return FormEditor[]
     * @throws \Exception
     */
    public function getFormEditors()
    {
        
    }

    /**
     * @param AbstractScriptComponent $element
     * @param $screenX
     * @param $screenY
     * @param null $parent
     * @return mixed|UXNode
     * @throws \php\lang\IllegalArgumentException
     */
    protected function createElement($element, $screenX, $screenY, $parent = null)
    {
        
    }

    protected function ___onAreaMouseUp(UXMouseEvent $e)
    {
        
    }

    public function makeId($idPattern)
    {
        
    }

    public function getRefactorRenameNodeType()
    {
        
    }

    public function delete($silent = false)
    {
        
    }
}