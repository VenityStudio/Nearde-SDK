<?php

namespace ide\editors;


use ide\editors\highlighters\JsonHighlighter;
use ide\editors\support\CodeArea;
use ide\editors\support\Gutter;
use ide\Ide;
use php\gui\UXNode;
use php\io\Stream;
use php\lib\fs;
use php\lib\str;

class TextEditor extends AbstractEditor
{
    /**
     * @var CodeArea
     */
    private $editor;

    /**
     * TextEditor constructor.
     * @param $file
     * @throws \Exception
     */
    public function __construct($file)
    {
        
    }

    public function load()
    {
        
    }

    public function save()
    {
        
    }

    /**
     * @return UXNode
     */
    public function makeUi()
    {
        
    }

    /**
     * @return CodeArea
     */
    public function getEditor(): CodeArea
    {
        
    }
}