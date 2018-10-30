<?php
namespace ide\forms;


use ide\tool\AbstractTool;
use ide\tool\AbstractToolInstaller;
use php\gui\UXDialog;
use php\gui\UXLabel;
use php\gui\UXTextArea;

/**
 * Class ToolInstallForm
 * @package ide\forms
 *
 * @property UXLabel $titleLabel
 * @property UXLabel $descriptionLabel
 * @property UXTextArea $console
 */
class ToolInstallForm extends AbstractIdeForm
{
    /**
     * @var AbstractToolInstaller
     */
    private $installer;

    /**
     * ToolInstallForm constructor.
     * @param AbstractToolInstaller $installer
     */
    public function __construct(AbstractToolInstaller $installer)
    {
        
    }

    protected function init()
    {
        
    }
}