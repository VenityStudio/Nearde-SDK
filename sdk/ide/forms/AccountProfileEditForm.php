<?php
namespace ide\forms;

use facade\Async;
use ide\account\api\ServiceResponse;
use ide\Ide;
use ide\ui\Notifications;
use php\gui\framework\AbstractForm;
use php\gui\layout\UXAnchorPane;
use php\gui\UXFileChooser;
use php\gui\UXImage;
use php\gui\UXImageArea;
use php\io\Stream;
use php\lib\str;

/**
 * Class AccountProfileEditForm
 * @package ide\forms
 *
 *
 * @property UXImageArea $avatarArea
 */
class AccountProfileEditForm extends AbstractForm
{
    /**
     * @var bool
     */
    protected $avatarChanged = false;

    /**
     * @var null|string
     */
    protected $avatarFile = null;

    /**
     * @var UXFileChooser
     */
    protected $dialog;

    protected function init()
    {
        
    }

    public function update()
    {
        
    }

    /**
     * @event show
     */
    public function doShow()
    {
        
    }

    /**
     * @event saveButton.action
     */
    public function doSave()
    {
        
    }

    /**
     * @event avatarClearButton.action
     */
    public function doAvatarClear()
    {
        
    }

    /**
     * @event avatarEditButton.action
     */
    public function doAvatarEdit()
    {
        
    }

    /**
     * @event changePasswordButton.action
     */
    public function doChangePassword()
    {
        
    }

    /**
     * @event cancelButton.action
     */
    public function doCancel()
    {
        
    }
}