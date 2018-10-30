<?php
namespace ide\systems;

use ide\forms\MessageBoxForm;
use ide\forms\OpenProjectForm;
use ide\Ide;
use ide\Logger;
use ide\project\AbstractProjectTemplate;
use ide\project\InvalidProjectFormatException;
use ide\project\Project;
use ide\project\ProjectConsoleOutput;
use ide\project\ProjectImporter;
use ide\ui\Notifications;
use ide\utils\FileUtils;
use php\gui\UXDialog;
use php\gui\UXDirectoryChooser;
use php\io\File;
use php\io\IOException;
use php\lang\Invoker;
use php\lang\System;
use php\lang\Thread;
use php\lib\fs;
use php\lib\Items;
use php\lib\Str;
use script\TimerScript;
use timer\AccurateTimer;
use function var_dump;

/**
 * Class ProjectSystem
 * @package ide\systems
 */
class ProjectSystem
{
    protected static function clear()
    {
        
    }

    /**
     * Compile full project.
     *
     * @param string $env
     * @param ProjectConsoleOutput $consoleOutput
     * @param string $hintCommand
     * @param callable $callback
     */
    static function compileAll($env, ProjectConsoleOutput $consoleOutput, $hintCommand, callable $callback)
    {
        
    }


    static public function checkDirectory($path)
    {
	
    }

    static function import($file, $projectDir = null, $newName = null, callable $afterOpen = null)
    {
        
    }

    /**
     * @param AbstractProjectTemplate $template
     * @param string $path
     * @param string $package
     */
    static function create(AbstractProjectTemplate $template, $path, $package = 'app')
    {
        
    }

    /**
     * @param string $fileName
     * @param bool $showDialogAlreadyOpened
     * @param bool $showMigrationDialog
     * @param bool $showWindowKind
     * @return Project|null
     * @throws \Exception
     */
    static function open($fileName, $showDialogAlreadyOpened = true, $showMigrationDialog = true, $showWindowKind = false)
    {
        
    }

    /**
     * ...
     */
    static function saveOnlyRequired()
    {
        
    }

    /**
     * @throws \Exception
     */
    static function save()
    {
        
    }

    static function closeWithWelcome($save = true)
    {
        
    }

    /**
     * Закрывает проект с открытми файлами проекта.
     * @param bool $saveAll
     */
    static function close($saveAll = true)
    {
        
    }
}