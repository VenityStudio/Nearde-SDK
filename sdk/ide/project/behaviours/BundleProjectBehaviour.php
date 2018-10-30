<?php
namespace ide\project\behaviours;

use ide\bundle\AbstractBundle;
use ide\bundle\AbstractJarBundle;
use ide\editors\AbstractEditor;
use ide\editors\ProjectEditor;
use ide\formats\ProjectFormat;
use ide\forms\BundleDetailInfoForm;
use ide\forms\MessageBoxForm;
use ide\Ide;
use ide\IdeConfiguration;
use ide\library\IdeLibraryBundleResource;
use ide\Logger;
use ide\project\AbstractProjectBehaviour;
use ide\project\behaviours\bundle\BundlesProjectControlPane;
use ide\project\control\CommonProjectControlPane;
use ide\project\Project;
use ide\project\ProjectModule;
use ide\systems\FileSystem;
use ide\systems\IdeSystem;
use ide\utils\FileUtils;
use ide\utils\PhpParser;
use php\gui\designer\UXDirectoryTreeValue;
use php\gui\layout\UXFlowPane;
use php\gui\layout\UXHBox;
use php\gui\layout\UXScrollPane;
use php\gui\layout\UXVBox;
use php\gui\UXButton;
use php\gui\UXCheckbox;
use php\gui\UXDialog;
use php\gui\UXLabel;
use php\gui\UXNode;
use php\io\File;
use php\lib\arr;
use php\lib\fs;
use php\lib\reflect;
use php\lib\str;
use php\util\Configuration;

/**
 * Class BundleProjectBehaviour
 * @package ide\project\behaviours
 */
class BundleProjectBehaviour extends AbstractProjectBehaviour
{
    const CONFIG_BUNDLE_KEY_USE_IMPORTS = 'useImports';

    const GENERATED_DIRECTORY = 'src_generated';
    const VENDOR_DIRECTORY = 'vendor';

    /**
     * @var UXNode
     */
    protected $uiSettings;

    /**
     * @var UXHBox
     */
    protected $uiPackages;

    /**
     * @var AbstractBundle[]
     */
    protected $bundles = [];

    /**
     * @var array
     */
    protected $bundlesCannotBeRemoved = [];

    /**
     * @var Configuration[]
     */
    protected $bundleConfigs = [];

    /**
     * @var UXCheckbox
     */
    protected $uiUseImportCheckbox;

    /**
     * @var array
     */
    protected $fileStat = [];

    /**
     * @return int
     */
    public function getPriority()
    {
        
    }

    /**
     * ...
     */
    public function inject()
    {
        
    }

    public function doCreate()
    {
        
    }

    public function doCreateEditor(AbstractEditor $editor)
    {
        
    }

    public function doClose()
    {
        
    }

    public function doSave()
    {
        
    }

    public function doLoad()
    {
        
    }

    /**
     * @param $class
     * @return AbstractBundle
     */
    public function makeBundle($class)
    {
        
    }

    protected function tryFileChange($filename, callable $handle)
    {
        
    }

    protected function doPreCompileUseImports($env, callable $log = null)
    {
        
    }

    public function doPreCompile($env, callable $log = null)
    {
        
    }

    /**
     * @param $env
     * @param AbstractBundle $bundle
     * @return AbstractBundle[]
     */
    public function getDependenciesOfBundle($env, AbstractBundle $bundle)
    {
        
    }

    /**
     * @param $env
     * @return \ide\bundle\AbstractBundle[]
     */
    public function fetchAllBundles($env)
    {
        
    }

    /**
     * @param $env
     * @param $class
     * @return AbstractBundle
     */
    public function fetchBundle($env, $class)
    {
        
    }

    /**
     * @param $env
     * @param string $class
     * @return bool
     */
    public function hasBundle($env, $class)
    {
        
    }

    /**
     * @param string $class
     * @return string|null
     */
    public function hasBundleInAnyEnvironment($class)
    {
        
    }

    /**
     * @return \ide\bundle\AbstractBundle[]
     */
    public function getBundles()
    {
        
    }

    /**
     * @param bool $hidden
     * @return \ide\bundle\AbstractBundle[]
     * @throws \Exception
     */
    public function getPublicBundles($hidden = false)
    {
        
    }

    /**
     * @param bool $hidden
     * @return IdeLibraryBundleResource[]
     * @throws \Exception
     */
    public function getPublicBundleResources($hidden = false)
    {
        
    }

    /**
     * @param AbstractBundle|string $bundleOrClass
     * @return IdeLibraryBundleResource|null
     * @throws \Exception
     */
    public function getResourceOfBundle($bundleOrClass)
    {
        
    }

    /**
     * @param string[] $classes
     * @throws \Exception
     */
    public function setBundles(array $classes)
    {
        
    }

    /**
     * @param string $env
     * @param string|AbstractBundle $class
     * @param bool $canRemove
     * @throws \Exception
     */
    public function addBundle($env, $class, $canRemove = true)
    {
        
    }

    /**
     * @param AbstractBundle|string $class
     * @param bool $force true to remove that cannot be removed.
     * @throws \Exception
     */
    public function removeBundle($class, $force = false)
    {
        
    }

    /**
     * @param $name
     * @return null
     */
    public function findClassByShortName($name)
    {
        
    }

    /**
     * @return array
     */
    public function getSourceDirectories()
    {
        
    }

    /**
     * @param AbstractBundle $bundle
     * @return Configuration
     */
    public function getBundleConfig(AbstractBundle $bundle)
    {
        
    }

    public function showBundleDetailDialog(IdeLibraryBundleResource $resource = null)
    {
        
    }

    public function doUpdateSettings(CommonProjectControlPane $editor = null)
    {
        
    }

    public function doMakeSettings(CommonProjectControlPane $editor)
    {
        
    }
}