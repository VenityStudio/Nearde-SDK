<?php
namespace ide;

use ide\project\Project;
use ide\project\ProjectFile;
use ide\utils\FileUtils;
use php\io\File;
use php\io\IOException;
use php\io\Stream;
use php\lib\reflect;
use php\lib\str;
use php\util\Scanner;

trait VendorContainer
{
    function getVendorName()
    {
        
    }

    function getVendorDirectory()
    {
        
    }

    function getVendorResource($name)
    {
        
    }

    /**
     * @deprecated
     * @return bool
     */
    function copyVendorDirectory()
    {
        
    }

    function deleteVendorDirectory()
    {
        
    }

    function copyVendorResourceToFile($name, $file)
    {
        
    }

    /**
     * Возвращает директорию вендора в проекте.
     *
     * @return ProjectFile|\php\io\File
     */
    function getProjectVendorDirectory()
    {
        
    }

    /**
     * @param string $path
     * @return File
     */
    function getProjectVendorFile($path)
    {
        
    }

    function copyVendorResource($name)
    {
        
    }

    function copyVendorResourceToProject($name, $projectPath = null, $toGenerated = false)
    {
        
    }
}