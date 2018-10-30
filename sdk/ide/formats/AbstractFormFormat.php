<?php
namespace ide\formats;

use ide\editors\FormEditor;
use ide\editors\menu\AbstractMenuCommand;
use ide\formats\form\AbstractFormElement;
use ide\formats\form\AbstractFormElementTag;
use ide\Logger;
use ide\misc\AbstractCommand;
use ide\project\Project;
use php\lang\Environment;
use php\lang\IllegalArgumentException;
use php\lang\IllegalStateException;
use php\lang\Thread;
use php\lang\ThreadPool;
use php\lib\arr;
use php\lib\fs;
use php\lib\reflect;
use php\lib\Str;
use php\lib\String;

/**
 * Class FormFormat
 * @package ide\formats
 */
abstract class AbstractFormFormat extends AbstractFormat
{
    /**
     * @var AbstractFormElement[]
     */
    protected $formElements = [];

    /**
     * @var AbstractFormElement[]
     */
    protected $formElementsByClass = [];

    /**
     * @var AbstractFormElementTag[]
     */
    protected $formElementTags = [];

    /**
     * @var AbstractMenuCommand[]
     */
    protected $contextCommands = [];

    public function isValid($file)
    {
        
    }

    /**
     * @return form\AbstractFormElementTag[]
     */
    public function getFormElementTags()
    {
        
    }

    /**
     * @return form\AbstractFormElement[]
     */
    public function getFormElements()
    {
        
    }

    /**
     * @return AbstractMenuCommand[]
     */
    public function getContextCommands()
    {
        
    }

    /**
     * @param string|object $any class or object
     *
     * @return AbstractFormElement|null
     */
    public function getFormElement($any)
    {
        
    }

    /**
     * @param string $class
     * @return AbstractFormElement
     */
    public function getElementByClass($class)
    {
        
    }

    /**
     * @param $any
     * @return mixed
     * @throws IllegalArgumentException
     */
    public function register($any)
    {
        
    }

    /**
     * @param $any
     * @throws IllegalArgumentException
     */
    public function unregister($any)
    {
        
    }

    public function registerDone()
    {

    }
}