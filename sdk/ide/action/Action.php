<?php
namespace ide\action;
use php\xml\DomElement;

/**
 * Class Action
 * @package ide\action
 */
class Action
{
    /**
     * @var AbstractActionType
     **/
    protected $type;

    protected $__level = 0;

    /**
     * @var string
     */
    protected $__contextClass = null;

    /**
     * @var string
     */
    protected $__contextMethod = null;

    /**
     * @param AbstractActionType $type
     */
    public function __construct(AbstractActionType $type)
    {
        
    }

    public function fillDefaults()
    {
        
    }

    public function imports()
    {
        
    }

    public function get($field)
    {
        
    }

    public function getFieldType($field)
    {
        
    }

    public function getDescription()
    {
        
    }

    public function getTitle()
    {
        
    }

    public function getIcon()
    {
        
    }

    public function getType()
    {
        
    }

    /**
     * @param int $_level
     */
    public function setLevel($_level)
    {
        
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        
    }

    /**
     * @return string
     */
    public function getContextClass()
    {
        
    }

    /**
     * @param string $_contextClass
     */
    public function setContextClass($_contextClass)
    {
        
    }

    /**
     * @return string
     */
    public function getContextMethod()
    {
        
    }

    /**
     * @param string $_contextMethod
     */
    public function setContextMethod($_contextMethod)
    {
        
    }
}