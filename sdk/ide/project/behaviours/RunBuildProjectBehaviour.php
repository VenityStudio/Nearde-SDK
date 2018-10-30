<?php
namespace ide\project\behaviours;

use ide\build\AntOneJarBuildType;
use ide\build\SetupWindowsApplicationBuildType;
use ide\build\WindowsApplicationBuildType;
use ide\commands\BuildProjectCommand;
use ide\commands\ExecuteProjectCommand;
use ide\Ide;
use ide\project\AbstractProjectBehaviour;
use ide\project\ProjectModule;
use ide\utils\FileUtils;
use php\lib\arr;
use php\lib\fs;
use php\lib\str;

/**
 * Class RunBuildProjectBehaviour
 * @package ide\project\behaviours
 */
class RunBuildProjectBehaviour extends AbstractProjectBehaviour
{
    public function createExecuteCommand(): ExecuteProjectCommand
    {
        
    }

    public function createBuildCommand(): BuildProjectCommand
    {
        
    }

    /**
     * ...
     */
    public function inject()
    {
        
    }

    /**
     * @return array
     */
    public function getSourceDirectories()
    {
        
    }

    /**
     * @param array $types extensions
     * @return array
     */
    public function getProfileModules(array $types)
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