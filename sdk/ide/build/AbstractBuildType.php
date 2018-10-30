<?php
namespace ide\build;
use ide\forms\BuildTypeConfigForm;
use ide\Ide;
use ide\project\Project;
use ide\utils\Json;
use php\format\JsonProcessor;
use php\format\ProcessorException;
use php\io\IOException;
use php\io\Stream;
use php\lib\Str;

/**
 * Class AbstractBuildType
 * @package ide\build
 */
abstract class AbstractBuildType
{
    /**
     * @return string
     */
    abstract function getName();

    /**
     * @return string
     */
    abstract function getDescription();

    /**
     * @return mixed
     */
    abstract function getIcon();

    /**
     * @param Project $project
     *
     * @return string
     */
    abstract function getBuildPath(Project $project);

    /**
     * @return string path for fxml
     */
    public function getConfigForm()
    {
        return null;
    }

    /**
     * @return array
     */
    public function getDefaultConfig()
    {
        return [];
    }

    /**
     * @param Project $project
     *
     * @param bool $finished
     *
     * @return mixed
     */
    abstract function onExecute(Project $project, $finished = true);

    /**
     * @return array
     */
    public function getConfig()
    {
        
    }

    private function saveConfig(BuildTypeConfigForm $dialog)
    {
        
    }

    private function loadConfig(BuildTypeConfigForm $dialog)
    {
        
    }

    function showConfigDialog()
    {
        
    }

    function fetchConfig()
    {
        
    }

    static function isShowConfig()
    {
        
    }

    static function setShowConfig($value)
    {
        
    }
}