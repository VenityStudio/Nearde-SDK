<?php

namespace ide\settings;

use ide\Ide;
use ide\themes\LightTheme;
use php\gui\layout\UXHBox;
use php\gui\layout\UXVBox;
use php\gui\UXComboBox;
use php\gui\UXLabel;
use php\gui\UXNode;
use php\gui\UXSeparator;

class IdeSettings extends AbstractSettings
{
    /**
     * @var UXComboBox
     */
    private $themesList;

    /**
     * @return string
     */
    public function getName(): string
    {
        return "ide.settings.ide";
    }

    /**
     * @return string
     */
    public function getIcon16(): string
    {
        return "icons/edit16.png";
    }

    /**
     * @return UXNode
     */
    public function getNode(): UXNode
    {
        
    }

    public function save(): void
    {
        
    }

    public function toDefault(): void
    {
        
    }
}