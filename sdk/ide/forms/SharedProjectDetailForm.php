<?php
namespace ide\forms;
use ide\commands\ShareProjectCommand;
use ide\forms\mixins\DialogFormMixin;
use ide\Ide;
use ide\account\api\ServiceResponse;
use ide\Logger;
use ide\systems\ProjectSystem;
use ide\ui\Notifications;
use php\gui\UXApplication;
use php\gui\UXButton;
use php\gui\UXClipboard;
use php\gui\UXHyperlink;
use php\gui\UXImageView;
use php\gui\UXLabel;
use php\io\IOException;
use php\io\Stream;
use php\lang\Thread;
use php\time\Time;
use script\TimerScript;
use timer\AccurateTimer;

/**
 * Class SharedProjectDetailForm
 * @package ide\forms
 *
 * @property UXLabel $nameLabel
 * @property UXLabel $descriptionLabel
 * @property UXHyperlink $accountLink
 * @property UXHyperlink $urlLink
 * @property UXImageView $icon
 * @property UXLabel $dateLabel
 * @property UXButton $reuploadButton
 * @property UXButton $deleteButton
 * @property UXButton $openButton
 */
class SharedProjectDetailForm extends AbstractOnlineIdeForm
{
    use DialogFormMixin;

    /**
     * @var string
     */
    protected $uid;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var bool
     */
    protected $forUpload;

    /**
     * SharedProjectDetailForm constructor.
     * @param $uid
     * @param bool $forUpload
     */
    public function __construct($uid, $forUpload = false)
    {
        
    }

    public function isAuthRequired()
    {
        
    }

    protected function init()
    {
        
    }

    public function update(array $data)
    {
        
    }

    /**
     * @event deleteButton.action
     */
    public function doDelete()
    {
        
    }

    /**
     * @event reuploadButton.action
     */
    public function doReupload()
    {
        
    }

    /**
     * @event cancelButton.action
     */
    public function doCancel()
    {
        
    }

    /**
     * @event urlLink.action
     */
    public function doUrl()
    {
        
    }

    /**
     * @event copyUrlButton.action
     */
    public function doCopyUrl()
    {
        
    }

    /**
     * @event show
     */
    public function doShow()
    {
        
    }

    /**
     * @event openButton.action
     */
    public function doOpen()
    {
        
    }
}