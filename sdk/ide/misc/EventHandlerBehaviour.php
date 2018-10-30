<?php
namespace ide\misc;

use ide\Logger;
use php\lib\str;

trait EventHandlerBehaviour
{
    /**
     * @var array
     */
    protected $handlers = [];

    /**
     * @var bool
     */
    private $handleLock = false;


    public function trigger($event, array $args = [])
    {
        
    }

    public function isLockHandles()
    {
        
    }

    public function lockHandles()
    {
        
    }

    public function unlockHandles()
    {
        
    }

    public function on($event, callable $handler, $group = 'general')
    {
        
    }

    public function bind($event, callable $handler)
    {
        
    }

    public function off($event, $group = null)
    {
        
    }
}