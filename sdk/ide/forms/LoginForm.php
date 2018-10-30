<?php

namespace ide\forms;

use ide\account\api\AccountService;
use ide\account\api\ServiceResponse;
use ide\forms\mixins\SavableFormMixin;
use ide\Ide;
use ide\Logger;
use ide\ui\Notifications;
use ide\utils\UiUtils;
use php\gui\UXDesktop;
use php\gui\framework\AbstractForm;
use php\gui\UXButton;
use php\gui\UXDialog;
use php\gui\UXHyperlink;
use php\gui\UXImage;
use php\gui\UXPasswordField;
use php\gui\UXTextField;

/**
 * Class LoginForm
 * @package ide\forms
 *
 * @property UXImage $icon
 * @property UXTextField $emailField
 * @property UXPasswordField $passwordField
 * @property UXButton $loginButton
 * @property UXButton $loginVkButton
 * @property UXHyperlink $registerLink
 * @property UXHyperlink $forgetPasswordLink
 */
class LoginForm extends AbstractOnlineIdeForm
{
    //use SavableFormMixin;

    protected function init()
    {
        
    }

    /**
     * @event loginButton.action
     * @event emailField.keyDown-Enter
     * @event passwordField.keyDown-Enter
     */
    public function actionLogin()
    {
        
    }

    /**
     * @event registerLink.action
     */
    public function actionRegister()
    {
        
    }

    /**
     * @event forgetPasswordLink.action
     */
    public function actionRestore()
    {
        
    }
}