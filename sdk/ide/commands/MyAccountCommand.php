<?php

namespace ide\commands;

use ide\editors\AbstractEditor;
use ide\editors\menu\ContextMenu;
use ide\Ide;
use ide\misc\AbstractCommand;
use php\gui\layout\UXAnchorPane;
use php\gui\layout\UXPanel;
use php\gui\UXButton;
use php\gui\UXImageArea;
use php\gui\UXSeparator;

class MyAccountCommand extends AbstractCommand
{
    /**
     * @var UXButton
     */
    protected $accountButton;

    /**
     * @var UXImageArea
     */
    protected $accountImage;

    /**
     * @var UXPanel
     */
    protected $accountImagePanel;

    /**
     * @var ContextMenu
     */
    protected $contextMenu;

    /**
     * MyAccountCommand constructor.
     */
    public function __construct()
    {
        
    }

    public function getName()
    {
        
    }

    public function onExecute($e = null, AbstractEditor $editor = null)
    {
        
    }

    public function makeMenuItem()
    {
        
    }

    public function makeUiForHead()
    {
        
    }

    public function isAlways()
    {
        
    }
}