<?php
namespace ide\formats;

use ide\editors\AbstractEditor;
use ide\editors\CodeEditor;
use ide\utils\FileUtils;
use php\gui\designer\UXSyntaxAutoCompletion;
use php\lib\Str;

class CssCodeFormat extends AbstractFormat
{
    /**
     * @param $file
     *
     * @param array $options
     * @return AbstractEditor
     */
    public function createEditor($file, array $options = [])
    {
        
    }

    public function getTitle($path)
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

    public function getIcon()
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