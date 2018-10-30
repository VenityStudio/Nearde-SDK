<?php
namespace ide\forms;
use ide\Ide;
use ide\account\api\ServiceResponse;
use ide\ui\Notifications;
use php\gui\UXTextField;

/**
 * @package ide\forms
 *
 * @property UXTextField $emailField
 * @property UXTextField $confirmKeyField
 */
class AccountRestorePasswordConfirmForm extends AbstractOnlineIdeForm
{
    /**
     * AccountRestorePasswordConfirmForm constructor.
     * @param $email
     */
    public function __construct($email)
    {
        
    }

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
     * @event confirmButton.action
     */
    public function doConfirm()
    {
        
    }
}