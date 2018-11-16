<?php

namespace ide\settings;


class SettingsContainer
{
    /**
     * @var AbstractSettings[]
     */
    private $settings;

    /**
     * @param AbstractSettings $settings
     */
    public function register(AbstractSettings $settings) {
        
    }

    /**
     * @param string $name
     * @return bool
     */
    public function has(string $name) : bool {
        
    }

    /**
     * @return AbstractSettings[]
     */
    public function getAll() : array {
        
    }
}