<?php
namespace ide\formats;

use ide\editors\AbstractEditor;
use ide\editors\ProjectEditor;
use ide\editors\WelcomeEditor;
use ide\project\control\AbstractProjectControlPane;
use php\lib\fs;
use php\lib\reflect;

/**
 * @package ide\formats
 */
class ProjectFormat extends AbstractFormat
{

    /**
     * @var AbstractProjectControlPane[]
     */
    protected $controlPanes = [];

    /**
     * @param AbstractProjectControlPane $pane
     */
    public function addControlPane(AbstractProjectControlPane $pane)
    {
        
    }

    /**
     * @param string $class
     */
    public function removeControlPane($class)
    {
        
    }

    public function addControlPanes(array $panes)
    {
        
    }

    /**
     * @return \ide\project\control\AbstractProjectControlPane[]
     */
    public function getControlPanes()
    {
        
    }

    /**
     * @param $file
     *
     * @param array $options
     * @return AbstractEditor
     */
    public function createEditor($file, array $options = [])
    {
        
    }

    public function getIcon()
    {
        
    }

    /**
     * @param $file
     *
     * @return bool
     */
    public function isValid($file)
    {
        
    }

    /**
     * @param $any
     *
     * @return mixed
     */
    public function register($any)
    {

    }
}