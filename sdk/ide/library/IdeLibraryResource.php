<?php
namespace ide\library;
use Files;
use ide\Ide;
use ide\Logger;
use ide\ui\MenuViewable;
use php\io\File;
use php\io\IOException;
use php\lang\IllegalStateException;
use php\lib\fs;
use php\lib\str;
use php\util\Configuration;
use ide\utils\FileUtils;

/**
 * Class IdeLibraryResource
 * @package ide\library
 */
abstract class IdeLibraryResource implements MenuViewable
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var bool
     */
    protected $valid;

    /**
     * @return string
     */
    abstract public function getCategory();

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return null;
    }

    /**
     * IdeLibraryResource constructor.
     * @param string $path
     */
    public function __construct($path = null)
    {
        
    }

    public function save()
    {
        
    }

    /**
     * @return bool
     */
    public function isHidden()
    {
        
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        
    }

    /**
     * @param $value
     */
    public function setDescription($value)
    {
       
    }

    /**
     * @return string
     */
    public function getName()
    {
        
    }

    /**
     * @param $name
     * @return string
     */
    public function setName($name)
    {
        
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        
    }

    /**
     * @param $author
     */
    public function setAuthor($author)
    {
        
    }

    /**
     * @return string
     */
    public function getAuthorSite()
    {
        
    }

    /**
     * @param $site
     */
    public function setAuthorSite($site)
    {
        
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        
    }

    /**
     * @param $version
     */
    public function setVersion($version)
    {
        
    }

    public function getPath()
    {
        
    }

    public function delete()
    {
        
    }

    /**
     * @return bool
     */
    public function isEmbedded()
    {
        
    }

    public function onRegister(IdeLibrary $library)
    {
        
    }

    function getIcon()
    {
        
    }

    function getMenuCount()
    {
        
    }

    /**
     * @return bool
     */
    function isValid()
    {
        
    }
}