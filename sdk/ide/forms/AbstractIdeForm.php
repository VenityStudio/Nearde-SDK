<?php
namespace ide\forms;

use ide\Ide;
use ide\Logger;
use ide\utils\FileUtils;
use php\gui\framework\AbstractForm;
use php\gui\framework\DataUtils;
use php\gui\UXForm;
use php\gui\UXLabeled;
use php\gui\UXMenu;
use php\gui\UXMenuBar;
use php\gui\UXMenuItem;
use php\gui\UXNode;
use php\gui\UXTextInputControl;
use php\lib\str;
use php\util\Regex;

/**
 * Class AbstractIdeForm
 * @package ide\forms
 */
class AbstractIdeForm extends AbstractForm
{

    public function __construct(UXForm $origin = null)
    {
        
    }

    public function showPreloader($text = '')
    {
        
    }

    public function toast($message, $timeout = 0)
    {
        
    }


    protected function init()
    {
        
    }

}