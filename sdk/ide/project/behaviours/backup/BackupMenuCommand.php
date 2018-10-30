<?php
namespace ide\project\behaviours\backup;

use ide\editors\AbstractEditor;
use ide\editors\menu\AbstractMenuCommand;
use ide\project\behaviours\BackupProjectBehaviour;
use timer\AccurateTimer;

abstract class BackupMenuCommand extends AbstractMenuCommand
{
    /**
     * @var callable
     */
    private $backupGetter;

    /**
     * @var BackupProjectBehaviour
     */
    protected $behaviour;

    /**
     * BackupDeleteMenuCommand constructor.
     * @param BackupProjectBehaviour $behaviour
     * @param callable $backupGetter
     */
    public function __construct(BackupProjectBehaviour $behaviour, callable $backupGetter)
    {
        
    }

    abstract public function onBackupExecute(Backup $backup);

    public function onExecute($e = null, AbstractEditor $editor = null)
    {
        
    }

    /**
     * @param \php\gui\UXMenu|\php\gui\UXMenuItem $item
     * @param AbstractEditor|null $editor
     */
    public function onBeforeShow($item, AbstractEditor $editor = null)
    {
        
    }

    public function makeUiForHead()
    {
        
    }
}