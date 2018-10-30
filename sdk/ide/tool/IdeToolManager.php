<?php
namespace ide\tool;
use facade\Async;
use ide\forms\ToolInstallForm;
use ide\IdeException;
use ide\Logger;
use ide\systems\IdeSystem;
use php\lang\Process;
use php\lib\arr;
use php\lib\reflect;
use php\lib\str;

/**
 * Class IdeToolManager
 * @package ide\tool
 */
class IdeToolManager
{
    /**
     * @var string
     */
    private $toolPath;

    /**
     * @var AbstractTool[]
     */
    private $tools = [];

    /**
     * IdeToolManager constructor.
     * @param $toolPath
     */
    public function __construct($toolPath = null)
    {
        
    }

    public function installer($toolName)
    {
        
    }

    public function makeInstall($tool, callable $next, callable $done)
    {
        
    }

    public function install(array $tools, callable $callback)
    {
        
    }

    /**
     * @param $toolName
     * @param array $args
     * @param null $workDirectory
     * @return Process
     * @throws IdeException
     */
    public function execute($toolName, array $args = [], $workDirectory = null)
    {
        
    }

    /**
     * @return string
     */
    public function getToolPath()
    {
        
    }

    /**
     * @param AbstractTool $tool
     */
    public function register(AbstractTool $tool)
    {
        
    }

    /**
     * @param string $name
     * @return AbstractTool
     */
    public function get($name)
    {
        
    }

    /**
     * @param string $name
     * @return bool
     */
    public function has($name)
    {
        
    }
}