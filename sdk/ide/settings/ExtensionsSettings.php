<?php

namespace ide\settings;


use ide\AbstractExtension;
use ide\Ide;
use php\gui\layout\UXAnchorPane;
use php\gui\layout\UXHBox;
use php\gui\layout\UXVBox;
use php\gui\UXLabel;
use php\gui\UXListCell;
use php\gui\UXListView;
use php\gui\UXNode;

class ExtensionsSettings extends AbstractSettings
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return "ide.settings.extensions";
    }

    /**
     * @return string
     */
    public function getIcon16(): string
    {
        return "icons/plugin16.png";
    }

    /**
     * @return UXNode
     * @throws \Exception
     */
    public function getNode(): UXNode
    {
        
    }

    public function save(): void
    {
        // noup
    }

    public function toDefault(): void
    {
        // noup
    }
}