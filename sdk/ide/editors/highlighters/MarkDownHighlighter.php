<?php

namespace ide\editors\highlighters;


use ide\editors\support\AbstractHighlighter;
use php\lib\str;
use php\util\Regex;

class MarkDownHighlighter extends AbstractHighlighter
{
    /**
     * @var array
     */
    private $classes = [
        "COMMENT" => "comment",
        "BOLD" => "string",
        "ITALIC" => "string",
        "MONOSPACE" => "string",
        "H1" => "string",
        "H2" => "string",
        "HMORE" => "string",
    ];

    /**
     * @throws \php\util\RegexException
     */
    public function applyHighlight(): void
    {
        
    }
}