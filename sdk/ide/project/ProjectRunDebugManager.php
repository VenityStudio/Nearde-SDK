<?php
namespace ide\project;

use framework\core\Component;
use framework\core\Event;

/**
 * Class ProjectRunDebugManager
 * @package ide\project
 */
class ProjectRunDebugManager extends Component
{
    /**
     * @var Project
     */
    private $project;

    /**
     * @var string
     */
    private $starter;

    /**
     * @var array
     */
    private $items = [];

    /**
     * ProjectRunDebugManager constructor.
     * @param Project $project
     */
    public function __construct(Project $project)
    {
        
    }

    /**
     * @param string $code
     * @param array $config
     */
    public function add(string $code, array $config)
    {
        
    }

    public function get(string $code): ?array
    {
        
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        
    }

    public function has(string $code): bool
    {
        
    }

    public function remove(string $code)
    {
        
    }

    public function clear()
    {
        
    }

    public function setStarter(string $starter) {
        
    }

    /**
     * @return string
     */
    public function getStarter(): string
    {
        
    }
}
