<?php
namespace ide\editors\argument;


use ide\behaviour\AbstractBehaviourSpec;
use ide\behaviour\IdeBehaviourDatabase;
use ide\behaviour\IdeBehaviourManager;
use ide\editors\common\ObjectListEditorItem;
use ide\Ide;
use php\gui\framework\behaviour\custom\AbstractBehaviour;

class BehaviourTypeArgumentEditor extends EnumArgumentEditor
{
    /**
     * @var IdeBehaviourDatabase
     */
    protected $manager;

    /**
     * @param IdeBehaviourDatabase $behaviourDatabase
     */
    public function __construct(IdeBehaviourDatabase $behaviourDatabase)
    {
        
    }

    /**
     * @return mixed
     */
    public function updateUi()
    {
        
    }
}