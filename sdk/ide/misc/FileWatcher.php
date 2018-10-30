<?php
namespace ide\misc;

use framework\core\Component;
use framework\core\Event;
use php\lib\fs;
use php\time\Timer;

/**
 * Class FileWatcher
 * @package ide\misc
 */
class FileWatcher extends Component
{
    const CHECK_INTERVAL = '1s';

    /**
     * @var mixed
     */
    private $file;

    /**
     * @var Timer
     */
    private $timer;

    /**
     * @var int
     */
    private $time;

    /**
     * @var int
     */
    private $size;

    /**
     * @var int
     */
    private $hash;

    function __construct($file)
    {
        
    }

    /**
     * @return bool
     */
    function isWatching(): bool
    {
        
    }

    /**
     * @param string $interval
     */
    function start(string $interval = self::CHECK_INTERVAL)
    {
        
    }

    function stop()
    {
        
    }

    public function free()
    {
        
    }


}