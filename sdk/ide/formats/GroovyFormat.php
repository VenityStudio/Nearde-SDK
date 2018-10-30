<?php

namespace ide\formats;


use ide\editors\AbstractEditor;
use ide\editors\highlighters\GroovyHighlighter;
use ide\editors\TextEditor;
use php\lib\arr;
use php\lib\fs;

class GroovyFormat extends AbstractFormat
{

    /**
     * @param $file
     * @param array $options
     * @return AbstractEditor
     */
    public function createEditor($file, array $options = [])
    {
        
    }

    /**
     * @param $file
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
     * @return mixed
     */
    public function register($any)
    {
        // TODO: Implement register() method.
    }
}