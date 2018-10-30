<?php

namespace ide\editors;


use ide\editors\highlighters\MarkDownHighlighter;
use ide\editors\support\CodeArea;
use ide\editors\support\Gutter;
use ide\Ide;
use ide\utils\FileUtils;
use markdown\Markdown;
use php\gui\UXNode;
use php\gui\UXTab;
use php\gui\UXTabPane;
use php\gui\UXWebView;
use php\io\Stream;

class MarkDownEditor extends AbstractEditor
{
    /**
     * @var CodeArea
     */
    private $editor;

    /**
     * @var UXWebView
     */
    private $browser;

    public function __construct(string $file)
    {
        
    }

    public function getIcon()
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

    public function render() {
        
    }
}