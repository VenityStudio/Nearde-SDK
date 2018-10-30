<?php
namespace ide\systems;

use php\gui\UXDirectoryChooser;
use php\gui\UXFileChooser;

/**
 * Class DialogSystem
 * @package ide\systems
 */
class DialogSystem
{
    const DIALOG_OPEN_PROJECT = 'open_project';
    const DIALOG_PROJECTS_DIRECTORY = 'projects_directory';
    const DIALOG_IMAGE = 'image';
    const DIALOG_ANY_FILE = 'any_file';

    /**
     * @var UXFileChooser[]|UXDirectoryChooser[]
     */
    protected static $dialogs = [];

    static function get($code)
    {
        
    }

    static function getAnyFile()
    {
        
    }

    static function getOpenProject()
    {
        
    }

    static function getProjectsDirectory()
    {
        
    }

    static function getImage()
    {
        
    }

    static function fileDialog($code, $extensionFilter = [['description' => 'All files', 'extensions' => ['*.*']]])
    {
        
    }

    static function directoryDialog($code)
    {
        
    }

    static function registerDefaults()
    {
        
    }
}