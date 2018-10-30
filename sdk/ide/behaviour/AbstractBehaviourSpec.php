<?php
namespace ide\behaviour;

use ide\action\AbstractSimpleActionType;
use ide\editors\value\ElementPropertyEditor;
use ide\editors\value\SimpleTextPropertyEditor;
use ide\library\IdeLibraryScriptGeneratorResource;
use ide\utils\FileUtils;
use php\gui\framework\behaviour\custom\AbstractBehaviour;
use php\gui\UXNode;
use php\io\IOException;
use php\lib\Str;
use php\xml\DomElement;
use php\xml\XmlProcessor;

/**
 * Class AbstractBehaviourSpec
 * @package ide\behaviour
 */
abstract class AbstractBehaviourSpec
{
    const GROUP_MAIN = 'behaviour.group.main::Главное';
    const GROUP_INPUT = 'behaviour.group.input::Управление';
    const GROUP_ANIMATION = 'behaviour.group.animation::Анимация';
    const GROUP_EFFECT = 'behaviour.group.effects::Эффекты';
    const GROUP_LOGIC = 'behaviour.group.logic::Логика';
    const GROUP_GAME = 'behaviour.group.game::Игровое';

    /**
     * @var bool
     */
    public $deletable = true;

    /**
     * AbstractBehaviourSpec constructor.
     * @param bool $deletable
     */
    public function __construct($deletable = true)
    {
        $this->deletable = $deletable;
    }


    /**
     * @return string
     */
    abstract public function getName();

    static function parseProperties($xmlFile)
    {
        
    }

    /**
     * @return array [name, code, tooltip, editorFactory]
     */
    public function getProperties()
    {
        
    }

    /**
     * @return string
     */
    public function getGroup()
    {
        
    }

    /**
     * @return bool
     */
    public function isDeletable()
    {
        
    }

    /**
     * @return AbstractBehaviourSpec[]
     */
    public function getDependencies()
    {
        
    }

    /**
     * @return string
     */
    abstract public function getDescription();

    /**
     * @return string
     */
    public function getIcon()
    {
        
    }

    /**
     * @return string
     */
    abstract public function getType();

    /**
     * @param $target
     * @return bool
     */
    public function isAllowedFor($target)
    {
        
    }

    /**
     * @return AbstractBehaviour
     */
    public function createBehaviour()
    {
        
    }

    /**
     * @param UXNode $node
     * @param AbstractBehaviour $behaviour
     */
    public function refreshNode(UXNode $node, AbstractBehaviour $behaviour)
    {
    }

    /**
     * @param UXNode $node
     * @param AbstractBehaviour $behaviour
     */
    public function deleteNode(UXNode $node, AbstractBehaviour $behaviour)
    {
    }

    /**
     * @param UXNode $node
     * @param AbstractBehaviour $behaviour
     */
    public function deleteSelf(UXNode $node, AbstractBehaviour $behaviour)
    {
    }

    /**
     * @return IdeLibraryScriptGeneratorResource[]
     */
    public function getScriptGenerators()
    {
        
    }
}