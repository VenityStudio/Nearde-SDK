<?php
namespace ide\editors\common;

use ide\formats\form\AbstractFormElement;
use ide\Ide;
use php\gui\UXImageView;

class ObjectListEditorItem extends \stdClass
{
    /**
     * @var string
     */
    public $text;
    
    /**
     * @var UXImageView
     */
    public $graphic;
    
    /**
     * @var string|null
     */
    public $value;
    
    /**
     * @var int
     */
    public $level = 0;
    
    /**
     * @var string
     */
    public $hint;

    /**
     * @var string
     */
    public $prefix = null;

    /**
     * @var AbstractFormElement
     */
    public $element;
    
    /**
     * ListItem constructor.
     * @param $text
     * @param $graphic
     * @param null $value
     * @param int $level
     */
    public function __construct($text = null, $graphic = null, $value = null, $level = 0)
    {
        
    }
    
    function __toString()
    {
        
    }

    public function duplicate()
    {
        
    }

    public function getName()
    {
        
    }

    public function getGroup()
    {
        
    }

    public function getIcon()
    {
        
    }
}