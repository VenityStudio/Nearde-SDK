<?php
namespace ide;

use ide\misc\AbstractEntity;
use php\io\IOException;
use php\io\Stream;
use php\lib\fs;
use php\util\Configuration;

/**
 * Class IdeConfiguration
 * @package ide
 */
class IdeConfiguration extends Configuration
{
    /**
     * @var string
     */
    private $fileName;

    /**
     * @var bool
     */
    protected $autoSave = true;
    /**
     * @var string
     */
    private $shortName;

    /**
     * IdeConfiguration constructor.
     * @param string $fileName
     * @param null $shortName
     */
    public function __construct($fileName, $shortName = null)
    {
        
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        
    }

    public function saveFile()
    {
        
    }

    public function loadFile()
    {
        
    }

    /**
     * @return boolean
     */
    public function isAutoSave()
    {
        
    }

    /**
     * @param boolean $autoSave
     */
    public function setAutoSave($autoSave)
    {
        
    }
}