<?php
namespace ide\project;

use develnext\lexer\inspector\AbstractInspector;
use Exception;
use ide\formats\AbstractFileTemplate;
use ide\formats\IdeFormatOwner;
use ide\forms\MainForm;
use ide\Ide;
use ide\IdeConfiguration;
use ide\IdeException;
use ide\Logger;
use ide\systems\FileSystem;
use ide\utils\FileUtils;
use php\concurrent\Promise;
use php\io\File;
use php\lang\ThreadPool;
use php\lib\arr;
use php\lib\fs;
use php\lib\reflect;
use php\lib\Str;
use php\time\Time;
use php\time\Timer;
use php\util\Flow;
use script\TimerScript;
use Throwable;

/**
 * Class Project
 * @package ide\project
 */
class Project
{
    use IdeFormatOwner;

    const ENV_ALL  = 'all';
    const ENV_DEV  = 'dev';
    const ENV_PROD = 'prod';
    const ENV_TEST = 'test';

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $packageName = 'app';

    /**
     * @var string
     */
    protected $rootDir;

    /**
     * @var string[]
     */
    protected $sourceRoots = [];

    /**
     * @var ProjectModule[]
     */
    protected $modules = [];

    /**
     * @var callable
     */
    protected $moduleTypeHandlers = [];

    /**
     * @var AbstractProjectBehaviour[]
     */
    protected $behaviours = [];

    /**
     * @var AbstractProjectSupport[]
     */
    protected $supports = [];

    /**
     * @var Timer
     */
    protected $supportRefreshTimer;

    /**
     * @var array
     */
    protected $handlers = [];

    /**
     * @var array
     */
    protected $ignoreRules = [];

    /**
     * @var ProjectConfig
     */
    protected $config;

    /**
     * @var IdeConfiguration[]
     */
    protected $ideConfigs = [];

    /**
     * @var ProjectTree
     */
    protected $tree;

    /**
     * @var AbstractProjectTemplate
     */
    protected $template;

    /**
     * @var ProjectIndexer
     */
    protected $indexer;

    /**
     * @var ProjectRefactorManager
     */
    protected $refactorManager;

    /**
     * @var TimerScript
     */
    protected $tickTimer;

    /**
     * @var string
     */
    protected $srcDirectory = null;

    /**
     * @var string
     */
    protected $srcGeneratedDirectory = null;

    /**
     * @var string
     */
    protected $resDirectory = null;

    /**
     * @var callable[] (IdeConfiguration $config)
     */
    protected $configConfigurers = [];

    /**
     * @var AbstractInspector[]
     */
    protected $inspectors = [];

    /**
     * @var ThreadPool
     */
    protected $inspectorLoaderThreadPoll;

    /**
     * @var callable[]
     */
    private $listHandlers = [];

    /**
     * @var ProjectRunDebugManager
     */
    private $runDebugManager;

    /**
     * Project constructor.
     *
     * @param string $rootDir
     * @param string $name
     */
    public function __construct($rootDir, $name)
    {
        
    }

    /**
     * @param string $filename
     *                                                                                                                                                                                                                               3
     * @return Project
     */
    public static function createForFile($filename)
    {
        
    }

    public function getMainProjectFile()
    {
        
    }

    /**
     * @return ProjectConfig
     */
    public function getConfig()
    {
        
    }

    public function doTick()
    {
        
    }

    public function getProjectFile()
    {
        
    }

    /**
     * @return string
     */
    public function getName()
    {
        
    }

    /**
     * @return string
     */
    public function getPackageName()
    {
        
    }

    /**
     * @param string $newName
     * @return bool
     */
    public function setName($newName)
    {
        
    }

    /**
     * @return string
     */
    public function getSrcDirectory()
    {
        
    }

    /**
     * @param callable $callback
     */
    public function eachSrcFile(callable $callback)
    {
        
    }

    /**
     * @param string $srcDirectory
     */
    public function setSrcDirectory($srcDirectory)
    {
        
    }

    /**
     * @return string
     */
    public function getSrcGeneratedDirectory()
    {
        
    }

    /**
     * @param string $srcGeneratedDirectory
     */
    public function setSrcGeneratedDirectory($srcGeneratedDirectory)
    {
        
    }

    /**
     * @return string
     */
    public function getResDirectory()
    {
        
    }

    /**
     * @param string $resDirectory
     */
    public function setResDirectory($resDirectory)
    {
        
    }

    /**
     * @param string $path
     *
     * @return bool
     */
    public function makeDirectory($path)
    {
        
    }

    /**
     * @param string $name
     * @param string $formatClass
     * @param array $options
     * @return ProjectFile
     * @throws IdeException
     */
    public function createBlank(string $name, string $formatClass, array $options = [])
    {
        
    }

    /**
     * @param $file
     * @param AbstractFileTemplate $template
     *
     * @return ProjectFile
     */
    public function createFile($file, AbstractFileTemplate $template)
    {
        
    }

    /**
     * @param string $file
     * @param AbstractFileTemplate $template
     * @param bool $override
     */
    public function defineFile($file, AbstractFileTemplate $template, $override = false)
    {
        
    }

    /**
     * @param string $file
     * @return ProjectFile|File
     */
    public function getFile($file)
    {
        
    }

    /**
     * @param string $file
     * @param bool $generated
     * @return ProjectFile|File
     * @throws Exception
     */
    public function getSrcFile($file, $generated = false)
    {
        
    }

    /**
     * @param $file
     *
     * @return ProjectFile|File
     */
    public function getAbsoluteFile($file)
    {
        
    }

    /**
     * @return array
     */
    public function getIgnoreRules()
    {
        
    }

    /**
     * @param array $ignoreRules
     */
    public function setIgnoreRules(array $ignoreRules)
    {
        
    }

    /**
     * @param $type
     * @param callable $handler (ProjectModule $module, $first, $remove)
     */
    public function registerModuleTypeHandler($type, callable $handler)
    {
        
    }

    /**
     * @param ProjectModule $module
     * @param $owner
     */
    public function addModule(ProjectModule $module, $owner = 'user')
    {
        
    }

    /**
     * @param ProjectModule $module
     * @param string $owner
     * @return bool
     */
    public function hasModule(ProjectModule $module, $owner = 'user')
    {
        
    }

    /**
     * @param ProjectModule $module
     * @param string $owner
     */
    public function removeModule(ProjectModule $module, $owner = 'user')
    {
        
    }

    /**
     * @return ProjectModule[]
     */
    public function getModules()
    {
        
    }

    /**
     * @param string $toDir
     * @throws Exception
     */
    public function copyModuleFiles($toDir)
    {
        
    }

    /**
     * @return string
     */
    public function getRootDir()
    {
        
    }

    /**
     * @return IdeConfiguration
     */
    public function getIdeServiceConfig()
    {
        
    }

    public function getIdeLibraryConfig()
    {
        
    }

    /**
     * @param callable $handler
     */
    public function addIdeConfigConfigurer($id, callable $handler)
    {
        
    }

    /**
     * @param $id
     */
    public function removeIdeConfigConfigurer($id)
    {
        
    }

    /**
     * @param $name
     * @return IdeConfiguration
     */
    public function getIdeConfig($name)
    {
        
    }

    /**
     * @return File
     */
    public function getIdeDir()
    {
        
    }

    /**
     * @param $name
     * @return File
     */
    public function getIdeFile($name)
    {
        
    }

    /**
     * @param string $name
     * @return File
     */
    public function getIdeCacheFile($name)
    {
        
    }

    /**
     * @param string $group
     * @return bool
     */
    public function clearIdeCache($group = '')
    {
        
    }

    /**
     * @param string $nameList
     * @return array
     */
    public function fetchNamedList($nameList)
    {
        
    }

    /**
     * @param string $listName
     * @param callable $handler
     * @param string $group
     * @return string
     */
    public function onList($listName, callable $handler, $group = null)
    {
        
    }

    /**
     * @param $listName
     * @param null $group
     */
    public function offList($listName, $group = null)
    {
        
    }

    /**
     * @param string $event
     * @param callable $callback
     * @param string $group
     * @return string
     */
    public function on($event, callable $callback, $group = null)
    {
        
    }

    /**
     * @param string $event
     * @param string $group
     */
    public function off($event, $group)
    {
        
    }


    /**
     * @param string $group
     */
    public function offGroup(string $group)
    {
        
    }

    /**
     * @param $event
     * @param array ...$args
     * @return mixed
     */
    public function trigger($event, ...$args)
    {
        
    }

    /**
     * @param $type
     *
     * @return bool
     */
    public function hasBehaviour($type)
    {
        
    }

    /**
     * @param string $type
     *
     * @return AbstractProjectBehaviour
     * @throws Exception
     */
    public function getBehaviour($type)
    {
        
    }

    public function removeBehaviour(string $type)
    {
        
    }

    /**
     * @return ProjectIndexer
     */
    public function getIndexer()
    {
        
    }

    /**
     * @return ProjectRefactorManager
     */
    public function getRefactorManager()
    {
        
    }

    /**
     * @return ProjectTree
     */
    public function getTree()
    {
        
    }

    /**
     * @return ProjectRunDebugManager
     */
    public function getRunDebugManager(): ProjectRunDebugManager
    {
        
    }

    /**
     * Вызывать при создании проекта.
     */
    public function create()
    {
        
    }

    /**
     * Вызывать при смене табов.
     */
    public function update()
    {
        
    }

    /**
     * Вызвать в момент открытия проекта (после загрузки, создания и восстановления).
     */
    public function open()
    {
        
    }

    /**
     * Refresh supports.
     */
    public function refreshSupports()
    {
        
    }

    /**
     * @param string $code
     * @return bool
     */
    public function hasSupport(string $code): bool
    {
        
    }

    /**
     * @param string $code
     * @return AbstractProjectSupport
     * @throws Exception
     */
    public function findSupport(string $code): ?AbstractProjectSupport
    {
        
    }

    /**
     * Переиндексировать весь проект.
     */
    public function reindex()
    {
        
    }

    /**
     * @return ProjectExporter
     * @throws \php\lang\IllegalArgumentException
     */
    public function makeExporter()
    {
        
    }

    /**
     * @param $file
     */
    public function export($file)
    {
        
    }

    /**
     * Загрузить данные проекта.
     */
    public function load()
    {
        
    }

    /**
     * @deprecated
     * @param $name
     */
    public function saveIdeConfig($name)
    {
        
    }

    /**
     * Сохранить все данные проекта.
     */
    public function save()
    {
        
    }

    /**
     * Восстановить целостность файлов проекта.
     */
    public function recover()
    {
        
    }

    /**
     * @param $environment
     * @param callable|null $log
     */
    public function preCompile($environment, callable $log = null)
    {
        
    }

    /**
     * @param string $environment dev, prod, test, etc.
     * @param callable $log
     */
    public function compile($environment, callable $log = null)
    {
        
    }

    /**
     * @param string $path
     *
     * @return bool
     */
    public function isIgnoredPath($path)
    {
        
    }

    /**
     * @param $any
     *
     * @param bool $inject
     * @return AbstractProjectBehaviour
     */
    public function register($any, $inject = true)
    {
        
    }

    /**
     * @param $file
     *
     * @return ProjectFile
     */
    protected function fetchFile($file)
    {
        
    }

    /**
     * @param AbstractProjectTemplate $template
     */
    public function setTemplate($template)
    {
        
    }

    /**
     * @param string $packageName
     */
    public function setPackageName($packageName)
    {
        
    }

    /**
     * @return AbstractProjectTemplate
     */
    public function getTemplate()
    {
        
    }

    public function close($save = true)
    {
        
    }

    function free()
    {
        
    }

    /**
     * @param string $fileName
     * @return ProjectFile[]
     */
    public function findDuplicatedFiles($fileName)
    {
        
    }

    /**
     * @param $fileName
     * @param $directory
     * @return ProjectFile
     */
    public function copyFile($fileName, $directory)
    {
        
    }

    public function isOpenedInOtherIde()
    {
        
    }

    public function loadSourceForInspector($path)
    {
        
    }

    public function unloadSourceForInspector($path)
    {
        
    }

    public function loadDirectoryForInspector($path, array $options = [], callable $done = null)
    {
        
    }

    public function unloadDirectoryForInspector($path): Promise
    {
        
    }

    /**
     * @return AbstractInspector[]
     */
    public function getInspectors()
    {
        
    }

    /**
     * @param $context
     * @return AbstractInspector
     */
    public function getInspector($context)
    {
        
    }

    /**
     * @param string $context
     * @param AbstractInspector $inspector
     */
    public function registerInspector($context, AbstractInspector $inspector)
    {
        
    }

    /**
     * @param string $context
     */
    public function unregisterInspector($context)
    {
        
    }
}