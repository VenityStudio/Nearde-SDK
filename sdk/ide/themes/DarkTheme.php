<?php

namespace ide\themes;


use ide\editors\CodeEditor;
use ide\utils\FileUtils;

class DarkTheme extends AbstractTheme
{
    private $colors = [
        "#333333" => "#ffffff",
        "blue"    => "#5280c9"
    ];
    
    /**
     * @return string
     */
    public function getName(): string
    {
        
    }

    /**
     * @return array
     */
    public function getCssFiles(): array
    {
        
    }

    public function getCodeEditorCssFile(): string
    {
        
    }
    
    public function colorAlias(string $color): string
    {
        
    }
}
