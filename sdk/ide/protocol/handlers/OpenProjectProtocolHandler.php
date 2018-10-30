<?php
namespace ide\protocol\handlers;

use ide\account\api\ServiceResponse;
use ide\commands\AbstractProjectCommand;
use ide\forms\MessageBoxForm;
use ide\forms\SharedProjectDetailForm;
use ide\Ide;
use ide\Logger;
use ide\protocol\AbstractProtocolHandler;
use ide\ui\Notifications;
use php\lib\str;

/**
 * Class OpenProjectProtocolHandler
 * @package ide\protocol\handlers
 */
class OpenProjectProtocolHandler extends AbstractProtocolHandler
{
    /**
     * @param string $query
     * @return bool
     */
    public function isValid($query)
    {
        
    }

    /**
     * @param $query
     * @return bool
     */
    public function handle($query)
    {
        
    }
}