<?php
namespace ide\tool;
use ide\misc\EventHandlerBehaviour;

/**
 * Class AbstractToolInstaller
 * @package ide\tool
 */
abstract class AbstractToolInstaller
{
    use EventHandlerBehaviour;

    /**
     * @var AbstractTool
     */
    protected $tool;

    public function __construct(AbstractTool $tool)
    {
        
    }

    /**
     * @return AbstractTool
     */
    public function getTool()
    {
        
    }

    /**
     * @return mixed
     */
    abstract public function run();

    /**
     * @param $status
     * @param int $progress
     */
    protected function triggerProgress($status, $progress)
    {
        
    }

    /**
     * @param $message
     * @param string $type
     */
    protected function triggerMessage($message, $type = 'info')
    {
        
    }

    /**
     * @param bool $success
     */
    protected function triggerDone($success)
    {
        
    }
}