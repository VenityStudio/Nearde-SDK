<?php
namespace ide\project;
use ide\utils\FileUtils;
use php\lib\fs;

/**
 * Class ProjectModule
 * @package ide\project
 */
class ProjectModule
{
    const TYPE_DIR = 'dir';

    protected $id;
    protected $type;
    protected $provided;

    /**
     * ProjectModule constructor.
     * @param string $id
     * @param string $type
     * @param bool $provided
     */
    public function __construct($id, $type, bool $provided = false)
    {
        
    }

    /**
     * @param $dirName
     * @param bool $provided
     * @return ProjectModule
     */
    public static function ofDir($dirName, bool $provided = false): ProjectModule
    {
        
    }

    /**
     * @return bool
     */
    public function isDir(): bool
    {
        
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        
    }

    /**
     * @return bool
     */
    public function isProvided(): bool
    {
        
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        
    }
}