<?php

namespace ide\library;

use Files;
use ide\Ide;
use ide\Logger;
use ide\utils\FileUtils;
use php\io\File;
use php\lang\IllegalArgumentException;
use php\lang\System;
use php\lib\fs;
use php\lib\Str;

/**
 * Class IdeLibrary
 * @package ide\library
 */
class IdeLibrary
{
    private $categories = [
        'projects' => [
            'title' => 'Проекты',
            'type' => 'ide\library\IdeLibraryProjectResource',
        ],
        'bundles' => [
            'title' => 'Пакеты расширений',
            'type' => 'ide\library\IdeLibraryBundleResource',
        ],
        'scriptGenerators' => [
            'title' => 'Генераторы скриптов',
            'type' => 'ide\library\IdeLibraryScriptGeneratorResource'
        ],
        'skins' => [
            'title' => 'Скины',
            'type' => 'ide\library\IdeLibrarySkinResource'
        ]
    ];

    /**
     * @var Ide
     */
    protected $ide;

    /**
     * @var File
     */
    protected $defaultDirectory;

    /**
     * @var File
     */
    protected $directories = [];

    /**
     * @var IdeLibraryResource[]
     */
    protected $resources = [];

    /**
     * IdeLibrary constructor.
     * @param Ide $ide
     */
    public function __construct(Ide $ide)
    {
        
    }

    public function updateCategory($code)
    {
        
    }

    public function update()
    {
        
    }

    /**
     * @param $category
     * @param $path
     * @return IdeLibraryResource|null
     */
    public function findResource($category, $path)
    {
        
    }

    /**
     * @param string $category
     * @param string $uniqueId
     * @return IdeLibraryResource
     */
    public function getResource($category, $uniqueId)
    {
        
    }

    /**
     * @param $category
     * @return IdeLibraryResource[]
     */
    public function getResources($category)
    {
        
    }

    /**
     * @param string $category
     * @param string $name
     * @param bool $rewrite
     * @throws IllegalArgumentException
     * @return IdeLibraryResource
     */
    public function makeResource($category, $name, $rewrite = false)
    {
        
    }

    /**
     * @param string $category
     * @return string
     */
    public function getResourceDirectory($category)
    {
        
    }

    public function delete(IdeLibraryResource $resource)
    {
        
    }
}