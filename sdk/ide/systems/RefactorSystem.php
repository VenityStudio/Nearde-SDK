<?php
namespace ide\systems;

use ide\Ide;
use ide\project\Project;

class RefactorSystem
{
    protected static $init = false;
    static $renameHandlers = [];

    static function init() {
        
    }

    static function rename($type, $target, $newName)
    {
        
    }

    static function onRename($type, callable $handler)
    {
        
    }
}