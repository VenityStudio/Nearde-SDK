<?php
namespace ide\project;
use ide\utils\FileUtils;
use ide\utils\Json;
use php\format\ProcessorException;
use php\io\IOException;

/**
 * Class ProjectIndexer
 * @package ide\project
 */
class ProjectIndexer
{
    /**
     * @var Project
     */
    protected $project;

    /**
     * @var array
     */
    protected $index = [];

    /**
     * ProjectIndexer constructor.
     * @param Project $project
     */
    public function __construct(Project $project)
    {
        
    }

    public function getIndexFile()
    {
        
    }

    public function load()
    {
        
    }

    public function save()
    {
        
    }

    public function clear()
    {
        
    }

    public function isValid()
    {
        
    }

    protected function key($file)
    {
        
    }

    /**
     * @param $file
     */
    public function indexOf($file)
    {
        
    }

    public function get($file, $key)
    {
        
    }

    public function remove($file, $key)
    {
        
    }

    public function push($file, $key, $value)
    {
        
    }

    public function pushAll($file, $key, array $value)
    {
        
    }

    /**
     * @param $file
     * @param $key
     * @param $value
     * @return $this
     */
    public function set($file, $key, $value)
    {
        
    }
}