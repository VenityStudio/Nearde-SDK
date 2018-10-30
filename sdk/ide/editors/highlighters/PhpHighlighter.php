<?php

namespace ide\editors\highlighters;


use ide\editors\support\AbstractHighlighter;
use php\lib\str;
use php\util\Regex;

class PhpHighlighter extends AbstractHighlighter
{
    private $classes = [
        "STRING"    => "string",
        "STRINGALT" => "string",
        "COMMENT"   => "comment",
        "COMMENTALT"   => "comment",
        "VAR"       => "variable",
        "NUM"       => "number",
        "KEYWORD"       => "keyword",
    ];

    private $keyWords = [
        "<\\?(php)|\\?>", '__halt_compiler', 'abstract', 'and', 'array', 'as', 'break', 'callable', 'case', 'catch',
        'class', 'clone', 'const', 'continue', 'declare', 'default', 'die', 'do', 'echo', 'else', 'elseif', 'empty',
        'enddeclare', 'endfor', 'endforeach', 'endif', 'endswitch', 'endwhile', 'eval', 'exit', 'extends', 'final',
        'for', 'foreach', 'function', 'global', 'goto', 'if', 'implements', 'include', 'include_once', 'instanceof',
        'insteadof', 'interface', 'isset', 'list', 'namespace', 'new', 'or', 'print', 'private', 'protected', 'public',
        'require', 'require_once', 'return', 'static', 'switch', 'throw', 'trait', 'try', 'unset', 'use', 'var', 'while',
        'xor'
    ];

    /**
     * @throws \php\util\RegexException
     */
    public function applyHighlight(): void
    {
        
    }
}