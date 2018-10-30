<?php

namespace ide\editors\support;

use ide\misc\EventHandlerBehaviour;

abstract class AbstractHighlighter
{
    use EventHandlerBehaviour;

    /**
     * @var CodeArea
     */
    protected $codeArea;

    public function __construct(CodeArea $area)
    {
        
    }

    public function apply() {
        
    }

    abstract public function applyHighlight() : void;
}