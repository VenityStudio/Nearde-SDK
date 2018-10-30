<?php
namespace ide\action;

use action\Score;
use ide\forms\ActionArgumentsDialog;
use ide\Logger;
use php\jsoup\Document;
use php\lib\Str;
use php\xml\DomDocument;
use php\xml\DomElement;

abstract class AbstractSimpleActionType extends AbstractActionType
{
    const GROUP_OTHER = 'action.type.other::Другое';
    const GROUP_APP = 'action.type.system::Система';
    const GROUP_MEDIA = 'action.type.media::Медиа';
    const GROUP_GAME = 'action.type.game::Игра';
    const GROUP_CONTROL = 'action.type.control::Управление';
    const GROUP_CONDITIONS = 'action.type.conditions::Условия';
    const GROUP_SCRIPT = 'action.type.other::Другое';

    const SUB_GROUP_WINDOW = 'action.type.group.form::Форма';
    const SUB_GROUP_COMPONENT = 'action.type.group.object::Объект';
    const SUB_GROUP_MOVING = 'action.type.group.moving::Движение';
    const SUB_GROUP_COMMON = 'action.type.group.common::Главное';
    const SUB_GROUP_DECOR = 'action.type.group.decoration::Декорация';
    const SUB_GROUP_ANIMATION = 'action.type.group.animation::Анимация';
    const SUB_GROUP_DATA = 'action.type.group.data::Данные';
    const SUB_GROUP_AUDIO = 'action.type.group.audio::Аудио';
    const SUB_GROUP_ADDITIONAL = 'action.type.group.additional::Другое';
    const SUB_GROUP_BEHAVIOUR = 'action.type.group.behaviour::Поведение';

    /**
     * @return array
     */
    function attributes()
    {
        return [];
    }

    function attributeLabels()
    {
        return [];
    }

    function attributeSettings()
    {
        return [];
    }

    function getSubGroup()
    {
        return self::SUB_GROUP_COMMON;
    }

    function fetchFieldValue(Action $action, $field, $value)
    {
        
    }

    /**
     * @param Action $action
     * @param DomElement $element
     * @param DomDocument $document
     */
    function serialize(Action $action, DomElement $element, DomDocument $document)
    {
        
    }

    /**
     * @param Action $action
     * @param DomElement $element
     */
    function unserialize(Action $action, DomElement $element)
    {
        
    }

    /**
     * @var ActionArgumentsDialog[]
     */
    static protected $showDialogCache = [];

    /**
     * @param $owner
     * @param Action $action
     * @param $userData
     * @param bool $asNew
     * @return bool
     */
    function showDialog($owner, Action $action, $userData = null, $asNew = false)
    {
        
    }
}