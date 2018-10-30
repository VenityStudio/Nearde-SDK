<?php
namespace ide\forms;

use action\Animation;
use ide\account\ui\NeedAuthPane;
use ide\Ide;
use ide\ui\Notifications;
use php\gui\UXApplication;
use php\gui\UXNode;
use php\gui\UXTooltip;

class AbstractOnlineIdeForm extends AbstractIdeForm
{
    /**
     * @var UXNode
     */
    protected $originalLayout;

    /**
     * @return bool
     */
    public function isAuthRequired()
    {
        
    }


    public function showError($errorText, UXNode $node)
    {
        
    }

    /**
     * AbstractOnlineIdeForm constructor.
     */
    public function __construct()
    {
        
    }

    public function updateUi()
    {
        
    }
}