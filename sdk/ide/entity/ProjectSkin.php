<?php

namespace ide\entity;

use ide\misc\AbstractEntity;
use php\compress\ZipException;
use php\compress\ZipFile;
use php\io\IOException;
use php\io\MemoryStream;
use php\io\Stream;
use php\lib\arr;
use php\lib\fs;
use php\lib\str;
use php\util\Configuration;

class ProjectSkin extends AbstractEntity
{
    /**
     * @var string
     */
    private $uid;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $authorSite;

    /**
     * @var string
     */
    private $file;

    /**
     * @var array
     */
    private $scopes = [];

    /**
     * @return ProjectSkin
     */
    public static function createEmpty()
    {
        return new ProjectSkin();
    }

    /**
     * @param $path
     * @return ProjectSkin
     * @throws IOException
     */
    public static function createFromDir($path): ProjectSkin
    {
        
    }

    /**
     * @param string $file zip file
     * @return ProjectSkin
     * @throws ZipException
     * @throws IOException
     */
    public static function createFromZip($file): ProjectSkin
    {
        
    }

    /**
     * @param mixed $cssSourceFile
     * @param mixed $zipDestFile
     * @param array $additionalFiles
     * @return ZipFile
     */
    public function saveToZip($cssSourceFile, $zipDestFile, array $additionalFiles = []): ZipFile
    {
        
    }

    /**
     * @return string
     */
    public function getUid(): string
    {
        
    }

    /**
     * @param string $uid
     */
    public function setUid(string $uid)
    {
        
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version)
    {
        
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author)
    {
        
    }

    /**
     * @return string
     */
    public function getAuthorSite(): string
    {
        
    }

    /**
     * @param string $authorSite
     */
    public function setAuthorSite(string $authorSite)
    {
        
    }

    /**
     * @return string
     */
    public function getFile(): string
    {
        
    }

    /**
     * @param string $file
     */
    public function setFile(string $file)
    {
        
    }

    /**
     * @param $directory
     * @param string|null $charset
     * @param callable|null $callback
     */
    public function unpack($directory, ?string $charset = null, callable $callback = null)
    {
       
    }

    /**
     * @return array
     */
    public function getScopes(): array
    {
        
    }

    /**
     * @param array|string $scopes
     */
    public function setScopes($scopes)
    {
        
    }

    /**
     * Is Empty skin.
     * @return bool
     */
    public function isEmpty()
    {
       
    }

    /**
     * @param string[] $scopes
     * @return bool
     */
    public function hasAnyScope(string ...$scopes): bool
    {
        
    }
}