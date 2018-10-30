<?php

namespace ide\project\behaviours;

use ide\editors\ProjectEditor;
use ide\formats\ProjectFormat;
use ide\forms\InputMessageBoxForm;
use ide\forms\MessageBoxForm;
use ide\Ide;
use ide\IdeConfiguration;
use ide\Logger;
use ide\misc\SimpleSingleCommand;
use ide\project\AbstractProjectBehaviour;
use ide\project\behaviours\backup\Backup;
use ide\project\behaviours\backup\BackupConfiguration;
use ide\project\behaviours\backup\BackupCreateMasterCommand;
use ide\project\behaviours\backup\BackupProjectControlPane;
use ide\project\behaviours\backup\BackupSettingsMenuCommand;
use ide\project\Project;
use ide\project\ProjectExporter;
use ide\project\ProjectImporter;
use ide\systems\FileSystem;
use ide\systems\ProjectSystem;
use php\compress\ZipException;
use php\lib\arr;
use php\lib\fs;
use php\lib\str;
use php\time\Time;
use php\time\Timer;
use php\util\Regex;

/**
 * Class BackupProjectBehaviour
 * @package ide\project\behaviours
 */
class BackupProjectBehaviour extends AbstractProjectBehaviour
{
    /**
     * @var BackupProjectControlPane
     */
    private $controlPane;

    /**
     * @var Timer
     */
    protected $timer;

    /**
     * @var BackupConfiguration
     */
    protected $config;

    /**
     * ...
     */
    public function inject()
    {
        
    }

    /**
     * @return BackupConfiguration
     */
    public function getConfig()
    {
        
    }

    /**
     * @return \php\io\File
     */
    public function getBackupDir()
    {
        
    }

    public function doExecute()
    {
        
    }

    public function doOpen()
    {
        
    }

    public function doSave()
    {
        $this->config->save();

        //$this->makeDefaultMasterBackup();
    }

    /**
     * Обновить UI backup pane, если необходимо.
     */
    public function refreshRequest()
    {
        
    }

    public function doExport(ProjectExporter $exporter)
    {
        
    }

    public function doClose()
    {
        
    }

    /**
     * @param Backup $backup
     */
    public function saveBackupProperties(Backup $backup)
    {
        
    }

    /**
     * Создать автоматический бэкап.
     *
     * @return Backup
     */
    public function makeAutoBackup()
    {
        
    }

    public function makeDefaultMasterBackup()
    {
        
    }

    /**
     * Создать мастер-копию.
     *
     * @param $name
     * @param $description
     * @return Backup
     */
    public function makeMasterBackup($name, $description)
    {
        
    }

    public function makeMasterBackupRequest()
    {
        
    }

    public function makeAutoBackupRequest()
    {
        
    }

    /**
     * Удалить все бэкапы.
     * @param string $sub
     */
    public function clearBackup($sub = '')
    {
        
    }

    /**
     */
    public function clearMasterBackupRequest()
    {
        
    }

    /**
     */
    public function clearAutoBackupRequest()
    {
        
    }

    /**
     * @param Backup $backup
     */
    public function deleteBackup(Backup $backup)
    {
        
    }

    /**
     * @param Backup $backup
     */
    public function deleteBackupRequest(Backup $backup)
    {
        
    }

    /**
     * Возвращает список автоматических бэкапов.
     * @return Backup[]
     */
    public function getAutoBackups()
    {
        
    }

    /**
     * @param $name
     * @return Backup|null
     */
    public function getMasterBackup($name)
    {
        
    }

    /**
     * Возвращает список мастер-копий.
     *
     * @return Backup[]
     */
    public function getMasterBackups()
    {
        
    }

    /**
     * Восстановить проект из бэкапа.
     *
     * @param Backup $backup
     * @return Project|null
     */
    public function restoreFromBackup(Backup $backup)
    {
        
    }

    /**
     * Запрос на восстановление бэкапа.
     *
     * @param Backup $backup
     */
    public function restoreFromBackupRequest(Backup $backup)
    {
        
    }

    public function doBackup()
    {
        
    }

    public function makeMenu()
    {
        
    }

    /**
     * see PRIORITY_* constants
     * @return int
     */
    public function getPriority()
    {
        
    }
}