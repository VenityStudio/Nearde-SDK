<?php
namespace ide\editors\argument;

use ide\editors\common\FileListEditor;
use ide\Ide;
use php\gui\layout\UXVBox;
use php\gui\UXNode;
use php\lib\str;

abstract class ResourceArgumentEditor extends AbstractArgumentEditor
{
    /**
     * @var FileListEditor
     */
    protected $ui;

    /**
     * @return string
     */
    abstract public function getPath();

    /**
     * @return string
     */
    abstract public function getIcon();

    /**
     * @return array
     */
    abstract public function getExtensions();

    /**
     * @return string
     */
    abstract public function getExtensionDescription();

    /**
     * @return string
     */
    public function getPrefixValue()
    {
        
    }

    /**
     * @return bool
     */
    public function isRecursive()
    {
        
    }

    /**
     * @param null $label
     * @return UXNode
     */
    public function makeUi($label = null)
    {
        
    }

    /**
     * @return mixed
     */
    public function updateUi()
    {
        
    }

    /**
     * @param $value
     * @param $type
     */
    public function setValue($value, $type)
    {
        
    }

    /**
     * @return string
     */
    public function getValue()
    {
        
    }

    /**
     * @return string
     */
    public function getValueType()
    {
        
    }

    public function requestUiFocus()
    {
        
    }
}