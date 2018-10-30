<?php

namespace ide\editors\support;

use ide\utils\FileUtils;
use php\gui\UXStyleClassedTextArea;
use php\gui\UXVirtualizedScrollPane;

class CodeArea extends UXVirtualizedScrollPane
{
    /**
     * @var UXStyleClassedTextArea
     */
    protected $richArea;

    /**
     * @var AbstractHighlighter
     */
    protected $highlighter;

    /**
     * @var LineNumber
     */
    protected $lineNumber;

    public function __construct()
    {
        
    }

    /**
     * @return UXStyleClassedTextArea
     */
    public function getRichArea(): UXStyleClassedTextArea
    {
        
    }

    public function setHighlighter(string $class) {
        
    }

    /**
     * @return AbstractHighlighter
     */
    public function getHighlighter(): ?AbstractHighlighter
    {
        
    }

    /**
     * @param string $file
     */
    public function addStylesheet(string $file) {
        
    }

    /**
     * @return LineNumber
     */
    public function getLineNumber()
    {
        
    }
}