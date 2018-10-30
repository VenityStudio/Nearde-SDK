<?php
namespace ide\forms;
use ide\forms\mixins\DialogFormMixin;
use ide\ui\FlowListViewDecorator;
use ide\ui\ImageBox;
use php\gui\event\UXMouseEvent;
use php\gui\layout\UXScrollPane;
use php\gui\UXDialog;
use php\gui\UXHyperlink;
use php\gui\UXImage;
use php\gui\UXLabel;

/**
 * Class SelectIconSizeForm
 * @package ide\forms
 *
 * @property UXScrollPane $list
 * @property UXHyperlink $link
 */
class SelectIconSizeForm extends AbstractIdeForm
{
    use DialogFormMixin;

    /**
     * @var FlowListViewDecorator
     */
    protected $listDecorator;

    public function init()
    {
        
    }

    public function setPack($name, $url, $licence)
    {
        
    }

    public function addSize($size, UXImage $image)
    {
        
    }

    /**
     * @event cancelButton.action
     */
    public function doCancel()
    {
        
    }

    /**
     * @event applyButton.action
     */
    public function doApply()
    {
        
    }
}