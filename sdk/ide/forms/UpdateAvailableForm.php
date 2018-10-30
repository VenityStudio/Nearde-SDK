<?php
namespace ide\forms;

use ide\Ide;
use ide\ui\Notifications;
use php\gui\event\UXEvent;
use php\gui\UXApplication;
use php\gui\UXButton;
use php\gui\UXDesktop;
use php\gui\UXLabel;
use php\gui\UXTextArea;

/**
 * Class UpdateAvailableForm
 * @package ide\forms
 *
 * @property UXTextArea $descriptionField
 * @property UXLabel $nameLabel
 *
 * @property UXButton $youtubeButton
 * @property UXButton $downloadButton
 */
class UpdateAvailableForm extends AbstractIdeForm
{
    /**
     * @var string
     */
    protected $videoLink;

    /**
     * @var string
     */
    protected $downloadLink;

    protected function init()
    {
        
    }


    /**
     * @param $data
     * @param bool $always
     * @return bool
     */
    public function tryShow($data, $always = false)
    {
        
    }

    /**
     * @event show
     */
    public function doShow()
    {
        
    }

    /**
     * @event youtubeButton.action
     */
    public function doYoutube()
    {
        
    }

    /**
     * @event downloadButton.action
     */
    public function doDownload()
    {
        
    }

    /**
     * @event close
     * @event cancelButton.action
     * @param UXEvent $e
     */
    public function doCancel(UXEvent $e)
    {
        
    }
}