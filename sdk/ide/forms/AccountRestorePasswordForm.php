<?php
namespace ide\forms;
use ide\Ide;
use ide\account\api\ServiceResponse;
use ide\ui\Notifications;
use php\gui\UXTextField;

/**
 * Class AccountRestorePasswordForm
 * @package ide\forms
 *
 * @property UXTextField $emailField
 */
class AccountRestorePasswordForm extends AbstractOnlineIdeForm
{
    protected function init()
    {
        
    }

    /**
     * @event cancelButton.action
     */
    public function doCancel()
    {
        
    }

    /**
     * @event restoreButton.action
     */
    public function doRestore()
    {
        
    }
}