<?php
namespace ide\tool;
use php\lang\IllegalStateException;
use php\lang\Process;

/**
 * Class AbstractTool
 * @package ide\tool
 */
abstract class AbstractTool
{
    /**
     * @var IdeToolManager
     */
    protected $manager;

    /**
     * @var string
     */
    protected $version = 'default';

    /**
     * AbstractTool constructor.
     * @param $version
     */
    public function __construct($version = 'default')
    {
        
    }


    /**
     * @param IdeToolManager $manager
     */
    public function setManager($manager)
    {
        
    }

    /**
     * @return IdeToolManager
     */
    public function getManager()
    {
        
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        
    }

    /**
     * @param string $version
     */
    public function useVersion($version)
    {
        
    }

    /**
     * @return string
     * @throws IllegalStateException
     */
    public function getBinPath()
    {
        
    }

    /**
     * @param array $args
     * @param $workDirectory
     * @return Process
     */
    abstract public function execute(array $args, $workDirectory = null);

    /**
     * @return bool
     */
    abstract public function getName();

    /**
     * @return bool
     */
    abstract public function isAvailable();

    /**
     * @return AbstractToolInstaller
     */
    abstract public function setup();
}