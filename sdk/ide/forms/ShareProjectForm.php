<?php
namespace ide\forms;
use ide\account\api\ServiceResponse;
use ide\Logger;
use ide\systems\ProjectSystem;
use ide\Ide;
use ide\ui\Notifications;
use php\gui\event\UXEvent;
use php\gui\UXApplication;

/**
 * Class ShareProjectForm
 * @package ide\forms
 */
class ShareProjectForm extends AbstractOnlineIdeForm
{
    /**
     * @var bool
     */
    protected $ignoreUid;

    /**
     * ShareProjectForm constructor.
     * @param $ignoreUid
     */
    public function __construct($ignoreUid = false)
    {
        
    }

    public function isAuthRequired()
    {
        
    }

    /**
     * @event show
     */
    public function doShow()
    {
        
    }

    /**
     * @event cancelButton.action
     */
    public function doCancel()
    {
        
    }

    /**
     * @event shareButton.action
     */
    public function doShare()
    {
        
    }
}