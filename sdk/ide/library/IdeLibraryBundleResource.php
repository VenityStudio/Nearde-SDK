<?php
namespace ide\library;
use ide\bundle\AbstractBundle;
use ide\Logger;
use ide\project\Project;
use ide\utils\FileUtils;
use php\desktop\Runtime;
use php\lib\arr;
use php\lib\fs;
use php\lib\str;

/**
 * Class IdeLibraryBundleResource
 * @package ide\library
 */
class IdeLibraryBundleResource extends IdeLibraryResource
{
    /**
     * @var AbstractBundle
     */
    protected $bundle;

    /**
     * @return string
     */
    public function getUniqueId()
    {
        $str = str::lower($this->getName());
        $str = str::replace($str, ' ', '_');
        $str = str::replace($str, '-', '_');

        return $str;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
        
    }

    /**
     * @return array
     */
    public function getSupport(): array
    {
        
    }

    /**
     * @param Project $project
     * @return bool
     */
    public function isSupport(Project $project): bool
    {
        
    }

    /**
     * @return string
     */
    public function getFullDescription()
    {
        
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        
    }

    public function onRegister(IdeLibrary $library)
    {
        
    }

    /**
     * @return AbstractBundle
     */
    public function getBundle()
    {
        
    }
}