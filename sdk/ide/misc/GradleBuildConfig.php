<?php
namespace ide\misc;

use ide\Ide;
use ide\Logger;
use ide\utils\FileUtils;
use ide\utils\StrUtils;
use php\format\ProcessorException;
use php\io\File;
use php\io\Stream;
use php\lang\IllegalArgumentException;
use php\lang\Process;
use php\lib\arr;
use php\lib\Str;
use php\xml\DomDocument;
use php\xml\DomElement;
use php\xml\XmlProcessor;

/**
 * Class GradleBuildConfig
 * @package ide\misc
 */
class GradleBuildConfig
{
    /** @var File */
    protected $file;

    /**
     * @deprecated
     * @var File
     */
    protected $documentFile;

    /**
     * @var string[]
     */
    protected $defines = [];

    /**
     * @var string[]
     */
    protected $plugins = [];

    /**
     * @var string[]
     */
    protected $sourceSets = [];

    /**
     * @var string[]
     */
    protected $repositories = [];

    /**
     * @var array[]
     */
    protected $dependencies = [];

    /**
     * @var string[]
     */
    protected $codeBlocks = [];

    /**
     * @var string
     */
    protected $projectName;

    /**
     * @var bool
     */
    protected $daemon = false;

    /**
     * @param string $filename path to build.gradle or build.gradle.xml
     */
    public function __construct($filename)
    {
        
    }

    public function stopDaemon()
    {
        
    }

    public function startDaemon()
    {
        
    }

    public function save()
    {
        
    }

    public function load()
    {
    }

    /**
     * @return string
     */
    public function getProjectName()
    {
        
    }

    /**
     * @param string $projectName
     */
    public function setProjectName($projectName)
    {
        
    }

    public function removePlugin($plugin)
    {
        
    }

    public function addPlugin($plugin)
    {
        
    }

    /**
     * @return string[]
     */
    public function getRepositories()
    {
        
    }

    /**
     * @return array
     */
    public function getDirectoryRepositories()
    {
        
    }

    public function addRepository($name, $value = null)
    {
        
    }

    public function setDefine($name, $value)
    {
        
    }

    public function setSourceSet($name, $value)
    {
        
    }

    public function removeSourceSet($name, $value)
    {
        
    }

    /**
     * @return string[]
     */
    public function getSourceSets($name)
    {
        
    }

    public function addSourceSet($name, $value)
    {
        
    }

    public function removeDependency($artifactId, $group = null)
    {
        
    }

    public function setDependency($artifactId, $group = null, $version = null)
    {
        
    }

    /**
     * @return array[]
     */
    public function getDependencies()
    {
        
    }

    protected function writeDefines(Stream $stream)
    {
        
    }

    protected function writePlugins(Stream $stream)
    {
        
    }

    protected function writeSourceSets(Stream $stream)
    {
        
    }

    protected function writeRepositories(Stream $stream)
    {
        
    }

    protected function writeDependencies(Stream $stream)
    {
        
    }

    protected function writeCodeBlocks(Stream $stream)
    {
        
    }

    public function appendCodeBlock($name, $code)
    {
        
    }

    public function removeCodeBlock($name)
    {
        
    }
}