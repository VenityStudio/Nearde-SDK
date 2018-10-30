<?php
namespace ide\project\behaviours\backup;

use ide\editors\AbstractEditor;
use ide\Ide;
use ide\misc\AbstractCommand;
use ide\project\behaviours\BackupProjectBehaviour;

class BackupSettingsMenuCommand extends AbstractCommand
{
    /**
     * @var BackupProjectBehaviour
     */
    private $behaviour;

    /**
     * BackupSettingsMenuCommand constructor.
     * @param BackupProjectBehaviour $behaviour
     */
    public function __construct(BackupProjectBehaviour $behaviour)
    {
        
    }

    public function getCategory()
    {
        
    }

    public function withBeforeSeparator()
    {
        
    }

    public function getName()
    {
        
    }

    public function getIcon()
    {
        
    }

    public function onExecute($e = null, AbstractEditor $editor = null)
    {
        
    }
}