<?php
namespace ide\forms;

use ide\account\api\ServiceResponse;
use ide\forms\mixins\DialogFormMixin;
use ide\Ide;
use ide\ui\Notifications;
use php\gui\framework\AbstractForm;
use php\gui\UXDialog;

class RegisterConfirmForm extends AbstractOnlineIdeForm
{
    use DialogFormMixin;

    protected function init()
    {
        
    }

    public function setEmail($email)
    {
        
    }

    /**
     * @event okButton.action
     */
    public function actionDone()
    {
        
    }
}