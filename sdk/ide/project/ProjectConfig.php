<?php
namespace ide\project;

use Exception;
use ide\Ide;
use ide\Logger;
use ide\systems\FileSystem;
use ide\systems\IdeSystem;
use ide\utils\FileUtils;
use php\format\ProcessorException;
use php\io\FileStream;
use php\io\IOException;
use php\io\Stream;
use php\lang\System;
use php\lib\arr;
use php\lib\fs;
use php\lib\Str;
use php\time\Time;
use php\util\Scanner;
use php\xml\DomDocument;
use php\xml\DomElement;
use php\xml\XmlProcessor;
use php\io\File;

/**
 *  .dnproject
 *
 * Class ProjectConfig
 * @package ide\project
 */
class ProjectConfig
{
    /**
     * @var string
     */
    protected $rootDir;

    /**
     * @var string
     */
    protected $projectName;

    /**
     * @var DomDocument
     */
    protected $document;

    /**
     * @var XmlProcessor
     */
    protected $processor;

    /**
     * @var string
     */
    protected $configPath;

    /**
     * ProjectConfig constructor.
     *
     * @param string $rootDir
     * @param string $projectName
     */
    public function __construct($rootDir, $projectName)
    {
        
    }

    /**
     * @param string $filename
     *
     * @return ProjectConfig
     */
    public static function createForFile($filename)
    {
        
    }

    public function save()
    {
        
    }

    public function reload()
    {
        
    }

    /**
     * @return string
     */
    public function getConfigPath()
    {
        
    }

    /**
     * @param string $name
     *
     * @return string
     */
    public function getProperty($name)
    {
        
    }

    /**
     * @param string $name
     * @param string $value
     */
    public function setProperty($name, $value)
    {
        
    }

    /**
     * @return string
     */
    public function getPackageName()
    {
        
    }

    /**
     * @return null|Time
     */
    public function getCreatedAt()
    {
        
    }

    /**
     * @return null|Time
     */
    public function getUpdatedAt()
    {
        
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        
    }

    /**
     * @return string
     */
    public function getAuthorOS()
    {
        
    }

    /**
     * @return string
     */
    public function getIdeVersion()
    {
        
    }

    /**
     * @return int
     */
    public function getIdeVersionHash()
    {
        
    }

    /**
     * @return string
     */
    public function getIdeName()
    {
        
    }

    /**
     * @return AbstractProjectTemplate
     */
    public function getTemplate()
    {
        
    }

    /**
     * @param ProjectFile[] $files
     */
    public function setProjectFiles(array $files)
    {
        
    }

    public function loadTreeState(ProjectTree $tree)
    {
        
    }

    /**
     * @param ProjectTree|array $treeOrPaths
     */
    public function setTreeState($treeOrPaths)
    {
        
    }

    public function setOpenedFiles(array $files, $selectedFile, array $windowFiles = [])
    {
        
    }

    /**
     * @param AbstractProjectBehaviour[] $behaviours
     */
    public function setBehaviours(array $behaviours)
    {
        
    }

    /**
     * @return array
     */
    public function getOpenedFiles()
    {
        
    }

    /**
     * @return array
     */
    public function getWindowOpenedFiles()
    {
        
    }

    /**
     * @return null|string
     */
    public function getSelectedFile()
    {
        
    }

    /**
     * @param Project $project
     * @return AbstractProjectBehaviour[]
     * @throws InvalidProjectFormatException
     */
    public function createBehaviours(Project $project)
    {
        
    }

    protected function update($onlyNew = false)
    {
        
    }

    /**
     * @throws Exception
     */
    protected function validate()
    {
        
    }

    /**
     * @param Project $project
     */
    public function setProject(Project $project)
    {
        
    }
}