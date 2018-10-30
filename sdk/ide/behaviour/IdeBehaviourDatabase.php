<?php
namespace ide\behaviour;

use ide\Ide;
use ide\IdeException;
use php\gui\framework\behaviour\custom\AbstractBehaviour;
use php\lib\str;

/**
 * Class IdeBehaviourDatabase
 * @package ide\behaviour
 */
class IdeBehaviourDatabase
{
    /**
     * @var AbstractBehaviourSpec[]
     */
    protected $specs = [];

    /**
     * @var AbstractBehaviourSpec[]
     */
    protected $specsByCode = [];

    /**
     * IdeBehaviourDatabase constructor.
     */
    public function __construct()
    {
        
    }

    /**
     * @return IdeBehaviourDatabase
     */
    public static function get()
    {
        
    }



    /**
     * @param string $source resource path
     * @throws IdeException
     */
    public function registerInternalList($source)
    {
        
    }

    /**
     * @param string $source
     * @throws IdeException
     */
    public function unregisterInternalList($source)
    {
        
    }

    /**
     * @param string|AbstractBehaviourSpec $spec
     * @throws IdeException
     */
    public function registerBehaviourSpec($spec)
    {
        
    }

    /**
     * @param string|AbstractBehaviourSpec $spec
     * @throws IdeException
     */
    public function unregisterBehaviourSpec($spec)
    {
        
    }

    /**
     * @param AbstractBehaviour $behaviour
     * @return AbstractBehaviourSpec
     */
    public function getBehaviourSpec(AbstractBehaviour $behaviour)
    {
        
    }

    public function getBehaviourSpecByClass($className)
    {
        
    }

    /**
     * @return AbstractBehaviourSpec[]
     */
    public function getAllBehaviourSpecs()
    {
        
    }
}