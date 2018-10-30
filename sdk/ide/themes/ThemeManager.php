<?php

namespace ide\themes;


use ide\Logger;

class ThemeManager
{
    /**
     * @var AbstractTheme[]
     */
    private $themes;

    /**
     * @var string
     */
    private $default;

    /**
     * @param AbstractTheme $theme
     */
    public function register(AbstractTheme $theme) {
        
    }

    public function setDefault(string $name) {
        
    }

    public function get(string $name) : ?AbstractTheme {
        
    }

    public function getDefault(): ?AbstractTheme
    {
        
    }
}