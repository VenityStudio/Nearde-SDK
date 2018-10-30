<?php

namespace ide\editors\highlighters;


use ide\editors\support\AbstractHighlighter;
use php\lib\str;
use php\util\Regex;

class JsonHighlighter extends AbstractHighlighter
{
    private $classes = [
        "STRING" => "string",
        "STRINGALT" => "string",
        "COMMENT" => "comment",
    ];
    
    public function applyHighlight() : void
    {
        
    }
}