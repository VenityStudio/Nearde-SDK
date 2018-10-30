<?php
namespace ide\forms;

use Files;
use ide\account\ui\NeedAuthPane;
use ide\forms\area\IconSearchPaneArea;
use ide\forms\mixins\DialogFormMixin;
use ide\forms\mixins\SavableFormMixin;
use ide\Ide;
use ide\systems\Cache;
use ide\systems\DialogSystem;
use ide\ui\FlowListViewDecorator;
use ide\ui\ImageBox;
use ide\ui\Notifications;
use ide\utils\FileUtils;
use php\gui\event\UXMouseEvent;
use php\gui\framework\AbstractForm;
use php\gui\layout\UXAnchorPane;
use php\gui\layout\UXFlowPane;
use php\gui\layout\UXPane;
use php\gui\layout\UXScrollPane;
use php\gui\layout\UXVBox;
use php\gui\paint\UXColor;
use php\gui\UXApplication;
use php\gui\UXButton;
use php\gui\UXFileChooser;
use php\gui\UXImage;
use php\gui\UXImageArea;
use php\gui\UXLabel;
use php\gui\UXLabelEx;
use php\gui\UXNode;
use php\gui\UXTextField;
use php\io\File;
use php\lib\arr;
use php\lib\fs;
use php\lib\Items;
use php\lib\Str;
use php\util\Flow;

/**
 * Class ImagePropertyEditorForm
 * @package ide\forms
 *
 * @property UXAnchorPane $imageView
 * @property UXFlowPane $gallery
 * @property UXAnchorPane $onlineSearchPane
 * @property UXTextField $projectQueryField
 * @property UXButton $projectSearchButton
 */
class ImagePropertyEditorForm extends AbstractIdeForm
{
    use DialogFormMixin {
        DialogFormMixin::setResult as protected _setResult;
    }
    use SavableFormMixin;

    protected $copiedFile = null;

    /** @var UXImageArea */
    protected $imageArea;

    protected $searchPaneArea;

    /** @var UXFileChooser */
    protected $dialog;

    /**
     * @var FlowListViewDecorator
     */
    protected $projectGallery;

    protected function init()
    {
        
    }

    public function updateOnlineGallery()
    {
        
    }

    public function updateGallery($searchQuery = '')
    {
        
    }

    public function setResult($path)
    {
        
    }

    /**
     * @param absolute $file
     */
    public function setResultFile($file)
    {
        
    }

    /**
     * @event addToGalleryButton.action
     */
    public function actionAddToGallery()
    {
        
    }

    /**
     * @event loadButton.action
     */
    public function actionLoad()
    {
        
    }

    /**
     * @event projectQueryField.keyUp
     * @event projectSearchButton.action
     */
    public function doSearchInProject()
    {
        
    }

    /**
     * @event clearButton.action
     */
    public function actionClear()
    {
        
    }

    /**
     * @event show
     */
    public function actionShow()
    {
        
    }

    /**
     * @event hide
     */
    public function actionHide()
    {
        
    }

    /**
     * @event applyButton.action
     */
    public function actionApply()
    {
        
    }

    /**
     * @event close
     * @event cancelButton.action
     */
    public function actionCancel()
    {
        
    }
}