<?php
namespace ide\forms;

use ide\account\api\ServiceResponse;
use ide\Ide;
use ide\ui\Notifications;
use php\gui\UXDialog;
use php\gui\UXPasswordField;

/**
 * Class AccountChangePasswordForm
 * @package ide\forms
 *
 * @property UXPasswordField $oldPasswordField
 * @property UXPasswordField $newPasswordField
 * @property UXPasswordField $checkPasswordField
 */
class AccountChangePasswordForm extends AbstractOnlineIdeForm
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
     * @event saveButton.action
     */
    public function doSave()
    {
        
    }
}