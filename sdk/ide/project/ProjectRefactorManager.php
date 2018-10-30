<?php
namespace ide\project;

use ide\misc\EventHandlerBehaviour;

/**
 * Class ProjectRefactorManager
 * @package ide\project
 */
class ProjectRefactorManager
{
    use EventHandlerBehaviour;

    /**
     * @var Project
     */
    protected $project;

    /**
     * ProjectRefactorManager constructor.
     * @param Project $project
     */
    public function __construct(Project $project)
    {
        
    }

    public function rename($type, $target, $newName)
    {
        
    }
}