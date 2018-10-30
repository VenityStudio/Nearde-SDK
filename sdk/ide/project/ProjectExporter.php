<?php
namespace ide\project;
use ide\utils\FileUtils;
use php\compress\ArchiveOutputStream;
use php\compress\ZipFile;
use php\io\File;
use php\io\IOException;
use php\io\Stream;
use php\lang\IllegalArgumentException;
use php\lib\fs;
use php\lib\Str;

/**
 * Class ProjectExporter
 * @package ide\project
 */
class ProjectExporter
{
    /**
     * @var string[] name -> file
     */
    protected $files = [];

    /**
     * @var Project
     */
    private $project;

    /**
     * ProjectExporter constructor.
     * @param Project $project
     */
    public function __construct(Project $project)
    {
        
    }

    /**
     * @param $file
     * @throws IllegalArgumentException
     */
    public function addFile($file)
    {
        
    }

    /**
     * @param $file
     */
    public function removeFile($file)
    {
        
    }

    /**
     * @param $dir
     */
    public function removeDirectory($dir)
    {
        
    }

    /**
     * @return string[]
     */
    public function getFiles()
    {
        
    }

    /**
     * @param $directory
     * @throws IllegalArgumentException
     */
    public function addDirectory($directory)
    {
        
    }

    /**
     * @param string  $zipFile
     */
    public function save($zipFile)
    {
        
    }
}