<?php
namespace ide\editors\argument;
use ide\Ide;
use php\gui\UXNode;

/**
 * Class AbstractArgumentEditor
 * @package ide\editors\argument
 */
abstract class AbstractArgumentEditor
{
    /**
     * @var string
     */
    protected $value;

    /**
     * @var string
     */
    protected $valueType;

    /**
     * @var mixed
     */
    protected $userData;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * AbstractArgumentEditor constructor.
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        
    }


    public function setValue($value, $type)
    {
        
    }

    public function isInline()
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

    /**
     * @return string
     */
    abstract public function getCode();

    /**
     * @param null $label
     * @return UXNode
     */
    abstract public function makeUi($label = null);

    /**
     * @return mixed
     */
    abstract public function updateUi();

    private static $editors = [];

    public static function register(AbstractArgumentEditor $editor)
    {
        
    }

    /**
     * @param $code
     * @return AbstractArgumentEditor
     * @throws \Exception
     */
    public static function get($code)
    {
        
    }

    /**
     * @param $type
     * @param array $options
     * @return AbstractArgumentEditor
     * @throws \Exception
     */
    public static function make($type, array $options = [])
    {
        
    }

    abstract public function requestUiFocus();

    public function setUserData($userData)
    {
        
    }
}