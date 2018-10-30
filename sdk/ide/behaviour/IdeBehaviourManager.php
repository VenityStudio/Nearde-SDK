<?php
namespace ide\behaviour;

use ide\Ide;
use ide\IdeException;
use ide\utils\FileUtils;
use php\format\ProcessorException;
use php\gui\framework\behaviour\custom\AbstractBehaviour;
use php\gui\framework\behaviour\custom\BehaviourLoader;
use php\gui\framework\behaviour\custom\BehaviourManager;
use php\gui\paint\UXColor;
use php\lang\NotImplementedException;
use php\lib\Str;
use php\xml\DomDocument;
use php\xml\XmlProcessor;

/**
 * Class IdeBehaviourManager
 * @package ide\behaviour
 */
class IdeBehaviourManager extends BehaviourManager
{
    /**
     * @var string
     */
    protected $file;

    /**
     * @var AbstractBehaviour[]
     */
    protected $behaviours;

    /**
     * @var callable
     */
    protected $targetGetter = null;

    /**
     * @var array
     */
    protected $undeletable = [];

    /**
     * @var IdeBehaviourDatabase
     */
    private $database;

    /**
     * @param $file
     * @param callable $targetGetter
     */
    public function __construct($file, callable $targetGetter = null)
    {
        
    }

    /**
     * @param AbstractBehaviour $behaviour
     * @return AbstractBehaviourSpec
     */
    public function getBehaviourSpec(AbstractBehaviour $behaviour)
    {
        
    }

    /**
     * @param $className
     * @return AbstractBehaviourSpec
     */
    public function getBehaviourSpecByClass($className)
    {
        
    }

    /**
     * @return AbstractBehaviourSpec[]
     */
    public function getAllBehaviourSpecs()
    {
        
    }

    /**
     * @param $targetId
     * @return AbstractBehaviour[]
     */
    public function getBehaviours($targetId)
    {
        
    }

    /**
     * @param $targetId
     */
    public function clearBehaviours($targetId)
    {
        
    }

    /**
     * @param $targetId
     * @param $type
     * @return AbstractBehaviour|null
     */
    public function getBehaviourByTargetId($targetId, $type)
    {
        
    }

    /**
     * @param $targetId
     * @param $type
     */
    public function removeBehaviour($targetId, $type)
    {
        
    }

    /**
     * @param $targetId
     * @param $type
     * @return bool
     */
    public function hasBehaviour($targetId, $type)
    {
        
    }

    /**
     * @param $targetId
     */
    public function removeBehaviours($targetId)
    {
        
    }

    public function duplicateBehaviours($targetId, $copyTargetId)
    {
        
    }

    /**
     * @param $oldId
     * @param $newId
     */
    public function changeTargetId($oldId, $newId)
    {
        
    }

    public function load()
    {
        
    }

    public function dump(DomDocument $document, array $targetIds = [])
    {
        
    }

    public function save()
    {
        
    }

    /**
     * @param $targetId
     * @param AbstractBehaviour $behaviour
     * @return mixed
     */
    public function apply($targetId, AbstractBehaviour $behaviour)
    {
        
    }

    /**
     * @param callable $targetGetter
     */
    public function setTargetGetter(callable $targetGetter)
    {
        
    }

    /**
     * @param $targetId
     * @return mixed|null
     */
    public function getTarget($targetId)
    {
        
    }

    public function hasTarget($targetId)
    {
        
    }

    /**
     * @param $target
     * @param $type
     * @return AbstractBehaviour
     * @throws NotImplementedException
     */
    public function getBehaviour($target, $type)
    {
        
    }

    /**
     * @return string
     */
    public function getFile()
    {
        
    }
}