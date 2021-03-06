<?php

namespace ide\editors\highlighters;

use ide\editors\support\AbstractHighlighter;
use php\lib\str;
use php\util\Regex;

class GroovyHighlighter extends AbstractHighlighter
{
    private $classes = [
        "STRING" => "string",
        "STRINGALT" => "string",
        "COMMENT" => "comment",
        "NUM" => "number",
        "KEYWORD" => "keyword"
    ];

    private $keywords = [
        "abstract", "as", "assert", "boolean", "break", "byte", "case", "catch", "char", "class", "const",
        "continue", "def", "default", "do", "double", "else", "enum", "extends", "false", "final", "finally",
        "float", "for", "goto", "if", "implements", "import", "in", "instanceof", "int", "interface",
        "long", "native", "new", "null", "package", "private", "protected", "public", "return", "short",
        "static", "strictfp", "super", "switch", "synchronized", "this", "threadsafe", "throw", "throws",
        "transient", "true", "try", "void", "volatile", "while", "task"
    ];
    
    public function applyHighlight() : void
    {
        
    }
}