<?php
namespace ide\project;
use ide\Ide;
use ide\VendorContainer;
use php\gui\framework\behaviour\custom\AbstractBehaviour;
use php\xml\DomElement;
use php\xml\DomDocument;

/**
 * Class AbstractProjectBehaviour
 * @package ide\project
 */
abstract class AbstractProjectBehaviour
{
    const PRIORITY_SYSTEM = 1;
    const PRIORITY_CORE = 100;
    const PRIORITY_LIBRARY = 1000;
    const PRIORITY_COMPONENT = 10000;

    use VendorContainer;
    use ProjectIdeConfigurable;

    /**
     * @var Project
     */
    protected $project;

    /**
     * @param Project $project
     * @return bool
     */
    public function isFit(Project $project)
    {
        
    }

    /**
     * ...
     */
    abstract public function inject();

    /**
     * see PRIORITY_* constants
     * @return int
     */
    abstract public function getPriority();

    /**
     * @param DomElement $domBehavior
     * @param DomDocument $document
     */
    public function serialize(DomElement $domBehavior, DomDocument $document)
    {
        // ...
    }

    /**
     * @param DomElement $domBehavior
     */
    public function unserialize(DomElement $domBehavior)
    {
        /// ...
    }

    /**
     * @param Project $project
     *
     * @param bool $inject
     * @return AbstractProjectBehaviour
     */
    public function forProject(Project $project, $inject = true)
    {
        
    }

    /**
     * @return $this
     * @throws \Exception
     */
    static function get()
    {
        
    }
}