<?php
namespace ide\forms;

use ide\account\api\ServiceResponse;
use ide\forms\mixins\DialogFormMixin;
use ide\Ide;
use ide\ui\Notifications;
use php\gui\framework\AbstractForm;
use php\gui\UXDialog;
use php\gui\UXNode;
use php\gui\UXTextField;
use php\gui\UXTooltip;
use php\lib\arr;

/**
 * Class RegisterForm
 * @package ide\forms
 *
 * @property UXTextField $captchaField
 */
class RegisterForm extends AbstractOnlineIdeForm
{
    use DialogFormMixin;

    protected function init()
    {
        
    }

    /**
     * @event refreshCaptcha.action
     */
    public function updateCaptcha()
    {
        
    }

    /**
     * @event show
     */
    public function actionShow()
    {
        
    }

    /**
     * @event confirmLink.action
     */
    public function confirm()
    {
        
    }

    /**
     * @event cancelButton.action
     */
    public function actionCancel()
    {
        
    }

    /**
     * @event nextButton.action
     */
    public function actionDone()
    {
        
    }
}