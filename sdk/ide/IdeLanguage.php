<?php
namespace ide;

use framework\core\Event;
use framework\localization\Localizer;
use ide\l10n\L10n;
use ide\misc\FileWatcher;
use ide\systems\IdeSystem;
use php\lib\fs;
use php\util\Configuration;

/**
 * Class IdeLanguage
 * @package ide
 */
class IdeLanguage
{
    private $code;
    private $directory;

    private $title;
    private $titleEn;

    private $restartMessage;

    private $altLang;

    private $beta;

    /**
     * @var array
     */
    private $sources = [];

    /**
     * @var Localizer
     */
    private $localizer;

    function __construct(Localizer $localizer, $code, $directory)
    {
        
    }

    /**
     * @return mixed
     */
    public function getDirectory()
    {
        
    }

    /**
     * @return string
     */
    public function getAltLang()
    {
        
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        
    }

    /**
     * @return mixed
     */
    public function getTitleEn()
    {
        
    }

    /**
     * @return string
     */
    public function getRestartMessage()
    {
        
    }

    /**
     * @return string
     */
    public function getRestartNo()
    {
        
    }

    /**
     * @return string
     */
    public function getRestartYes()
    {
        
    }

    /**
     * @return null|string
     */
    public function getIcon()
    {
        
    }

    /**
     * @return null|string
     */
    public function getBigIcon()
    {
        
    }

    public function addSource(string $source)
    {
        
    }

    public function isBeta(): bool
    {
        
    }
}