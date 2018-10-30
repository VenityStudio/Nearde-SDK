<?php

namespace ide\formats;


use ide\editors\AbstractEditor;
use ide\editors\MarkDownEditor;
use php\lib\fs;

class MarkDownFormat extends AbstractFormat
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

    /**
     * @param $any
     * @return mixed
     */
    public function register($any)
    {

    }

    public function getIcon()
    {
        
    }
}