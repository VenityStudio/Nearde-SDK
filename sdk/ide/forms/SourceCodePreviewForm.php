<?php
namespace ide\forms;

use behaviour\custom\EscapeShutdownBehaviour;
use ide\editors\CodeEditor;
use ide\forms\mixins\DialogFormMixin;
use ide\misc\AbstractCommand;
use ide\ui\Notifications;
use ide\utils\UiUtils;
use php\gui\layout\UXAnchorPane;
use php\gui\layout\UXVBox;
use php\gui\UXClipboard;
use php\gui\UXForm;
use php\gui\UXLabel;
use php\lib\str;

/**
 * Class SourceCodePreviewForm
 * @package ide\forms
 */
class SourceCodePreviewForm extends UXForm
{
    use DialogFormMixin;

    /**
     * @var CodeEditor
     */
    protected $editor;

    /**
     * SourceCodePreviewForm constructor.
     * @param string $source
     * @param string $syntax
     */
    public function __construct($source, $syntax)
    {
        
    }
}