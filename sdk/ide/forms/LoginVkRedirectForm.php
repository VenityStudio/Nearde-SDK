<?php
namespace ide\forms;

use ide\account\api\AccountService;
use ide\account\api\ServiceResponse;
use ide\forms\mixins\DialogFormMixin;
use ide\Ide;
use php\gui\framework\ScriptEvent;
use php\gui\UXDesktop;
use php\gui\framework\AbstractForm;
use php\gui\UXButton;
use php\gui\UXClipboard;
use php\gui\UXDialog;
use php\gui\UXHyperlink;
use php\gui\UXTextField;
use script\TimerScript;

/**
 * Class LoginVkRedirectForm
 * @package ide\forms
 *
 * @property UXHyperlink $urlLink
 * @property UXButton $copyButton
 * @property UXTextField $confirmField
 */
class LoginVkRedirectForm extends AbstractIdeForm
{
    use DialogFormMixin;

    public function setAuthUrl($url)
    {
        
    }

    /**
     * @event show
     */
    public function actionShow()
    {
        
    }

    /**
     * @event copyButton.action
     */
    public function actionCopy()
    {
        
    }

    /**
     * @event urlLink.click
     */
    public function actionRedirect()
    {
        
    }

    /**
     * @event loginVkButton.action
     */
    public function actionLoginVkButton()
    {
        
    }
}