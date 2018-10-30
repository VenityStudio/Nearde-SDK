<?php
namespace ide\systems;

use ide\Ide;
use ide\Logger;
use ide\quest\Quest;
use ide\quest\QuestLoader;
use ide\quest\QuestTaskTrigger;

/**
 * Class QuestSystem
 * @package ide\systems
 */
class QuestSystem
{
    /**
     * @var QuestLoader
     */
    protected static $loader;

    /**
     * @var Quest[]
     */
    protected static $quests;

    /**
     * @var array
     */
    protected static $triggerClasses = [];

    /**
     * @return QuestLoader
     */
    static function loader()
    {
        
    }

    /**
     * @param $path
     * @param bool $override
     */
    static function load($path, $override = true)
    {
        
    }

    /**
     * Unload all quests.
     */
    static function unloadAll()
    {
        
    }

    /**
     * @param $code
     * @return string|null
     */
    static function getTriggerClass($code)
    {
        
    }
}