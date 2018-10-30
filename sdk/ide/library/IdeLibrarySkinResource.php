<?php
namespace ide\library;
use ide\entity\ProjectSkin;
use ide\Ide;
use ide\Logger;
use php\compress\ZipException;
use php\compress\ZipFile;
use php\io\File;
use php\io\IOException;
use php\io\Stream;
use php\lib\arr;
use php\lib\fs;
use php\lib\str;
use php\util\Configuration;

/**
 * Class IdeLibraryQuestResource
 * @package ide\library
 */
class IdeLibrarySkinResource extends IdeLibraryResource
{
    /**
     * @var ProjectSkin
     */
    private $skin;

    public function __construct($path = null)
    {
        
    }

    public function delete()
    {
        
    }

    public function getUniqueId()
    {
        
    }

    /**
     * @return ProjectSkin
     */
    public function getSkin(): ?ProjectSkin
    {
        
    }

    function isValid()
    {
        
    }


    /**
     * @return string
     */
    public function getCategory()
    {
        
    }


    /**
     * @param IdeLibrary $library
     */
    public function onRegister(IdeLibrary $library)
    {

    }
}