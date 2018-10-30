<?php
namespace ide\project;

use ide\formats\AbstractFileTemplate;
use ide\Logger;
use ide\utils\FileUtils;
use php\io\File;
use php\io\FileStream;
use php\io\IOException;
use php\io\Stream;
use php\lib\Str;
use php\util\Regex;
use php\xml\DomDocument;
use php\xml\DomElement;

/**
 * Class ProjectFile
 * @package ide\project
 */
class ProjectFile extends File
{
    /**
     * @var Project
     */
    protected $project;

    /**
     * @var int
     */
    protected $syncTime;

    /**
     * @var bool
     */
    protected $generated = false;

    /**
     * @var bool
     */
    protected $hiddenInTree = false;

    /**
     * @var AbstractFileTemplate
     */
    protected $template = null;

    /**
     * @var ProjectFile[]
     */
    protected $links = [];

    /**
     * ProjectFile constructor.
     *
     * @param Project $project
     * @param string $filename
     */
    public function __construct(Project $project, $filename)
    {
        
    }

    /**
     * @return Project
     */
    public function getProject()
    {
        
    }

    public function isChanged()
    {
        
    }

    /**
     * @param string $suffix
     * @return string
     */
    public function getRelativePath($suffix = '')
    {
        
    }

    /**
     * @param bool|false $generated
     * @return string
     * @throws \Exception
     */
    public function getSrcRelativePath($generated = false)
    {
        
    }

    /**
     * @return bool
     */
    public function isInRootDir()
    {
        
    }

    /**
     * @return int
     */
    public function getSyncTime()
    {
        
    }

    /**
     * @param int $syncTime
     */
    public function setSyncTime($syncTime)
    {
        
    }

    /**
     * @return boolean
     */
    public function isHiddenInTree()
    {
        
    }

    /**
     * @param boolean $hiddenInTree
     */
    public function setHiddenInTree($hiddenInTree)
    {
        
    }

    /**
     * @return bool
     */
    public function isNew()
    {
        
    }

    /**
     * @return boolean
     */
    public function isGenerated()
    {
        
    }

    /**
     * @param boolean $generated
     */
    public function setGenerated($generated)
    {
        
    }

    /**
     * Обновляет шаблон файла.
     *
     * @param bool $override
     */
    public function updateTemplate($override = false)
    {
        
    }

    /**
     * @param AbstractFileTemplate $template
     */
    public function applyTemplate(AbstractFileTemplate $template)
    {
        
    }

    /**
     * @param ProjectFile $file
     */
    public function addLink(ProjectFile $file)
    {
        
    }

    /**
     * @return ProjectFile[]
     */
    public function getLinks()
    {
        
    }

    /**
     * @return string
     */
    public function getNameHash()
    {
        
    }

    public function getNameNoExtension()
    {
        
    }

    /**
     * @param $extension
     *
     * @return ProjectFile|null
     *
     */
    public function findLinkByExtension($extension)
    {
        
    }

    /**
     * @param callable $callback
     */
    public function scan(callable $callback)
    {
        
    }

    public function delete()
    {
        
    }

    public function serialize(DomElement $element, DomDocument $document)
    {
        
    }

    public static function unserialize(Project $project, DomElement $element)
    {
        
    }
}