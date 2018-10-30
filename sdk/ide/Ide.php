<?php
namespace ide;

use ide\bundle\AbstractBundle;
use ide\editors\AbstractEditor;
use ide\editors\value\ElementPropertyEditor;
use ide\formats\AbstractFormat;
use ide\formats\IdeFormatOwner;
use ide\forms\MainForm;
use ide\l10n\IdeLocalizer;
use ide\l10n\L10n;
use ide\library\IdeLibrary;
use ide\misc\AbstractCommand;
use ide\misc\EventHandlerBehaviour;
use ide\project\AbstractProjectSupport;
use ide\project\AbstractProjectTemplate;
use ide\project\control\AbstractProjectControlPane;
use ide\project\Project;
use ide\systems\Cache;
use ide\systems\FileSystem;
use ide\systems\IdeSystem;
use ide\systems\ProjectSystem;
use ide\themes\DarkTheme;
use ide\themes\LightTheme;
use ide\themes\ThemeManager;
use ide\tool\IdeToolManager;
use ide\ui\LazyLoadingImage;
use ide\ui\UXError;
use ide\utils\FileUtils;
use ide\utils\Json;
use php\gui\framework\Application;
use php\gui\UXButton;
use php\gui\UXImage;
use php\gui\UXImageView;
use php\gui\UXMenu;
use php\gui\UXMenuItem;
use php\gui\UXSeparator;
use php\io\File;
use php\io\IOException;
use php\io\ResourceStream;
use php\io\Stream;
use php\lang\IllegalArgumentException;
use php\lang\System;
use php\lang\Thread;
use php\lang\ThreadPool;
use php\lib\arr;
use php\lib\fs;
use php\lib\reflect;
use php\lib\Str;
use php\time\Time;
use php\time\Timer;
use php\util\Regex;
use php\util\Scanner;
use timer\AccurateTimer;


/**
 * Class Ide
 * @package ide
 */
class Ide extends Application
{
    use EventHandlerBehaviour;
    use IdeFormatOwner {
        getRegisteredFormat as _getRegisteredFormat;
    }

    /** @var string */
    private $OS;

    /**
     * @var AbstractProjectTemplate[]
     */
    protected $projectTemplates = [];

    /**
     * @var AbstractProjectSupport[]
     */
    protected $projectSupports = [];

    /**
     * @var AbstractExtension[]
     */
    protected $extensions = [];

    /**
     * @var AbstractCommand[]
     */
    protected $commands = [];

    /**
     * @var callable
     */
    protected $afterShow = [];

    /**
     * @var IdeConfiguration[]
     */
    protected $configurations = [];

    /**
     * @var Project
     */
    protected $openedProject = null;

    /**
     * @var AbstractProjectControlPane[]
     */
    protected $projectControlPanes = [];

    /**
     * @var IdeLibrary
     */
    protected $library;

    /**
     * @var IdeToolManager
     */
    protected $toolManager;

    /**
     * @var boolean
     */
    protected $idle = false;

    /**
     * @var IdeLocalizer
     */
    protected $localizer;

    /**
     * @var IdeLanguage[]
     */
    protected $languages = [];

    /**
     * @var IdeLanguage
     */
    protected $language;

    /**
     * @var ThreadPool
     */
    private $asyncThreadPool;


    protected $disableOpenLastProject = false;

    /**
     * @var string
     */
    protected $mode = 'prod';

    /**
     * @var ThemeManager
     */
    private $themeManager;

    public function __construct($configPath = null)
    {
        
    }

    public function launch()
    {
        
    }

    /**
     * Запустить коллбэка в очереди потоков IDE.
     *
     * @param callable $callback
     * @param callable|null $after
     */
    public static function async(callable $callback, callable $after = null)
    {
        
    }

    public function isWindows()
    {
        
    }

    public function isLinux()
    {
        
    }

    public function isMac()
    {
        
    }

    /**
     * @return IdeLibrary
     */
    public function getLibrary()
    {
        
    }

    /**
     * Менеджер тулов/утилит.
     *
     * @return IdeToolManager
     */
    public function getToolManager()
    {
        
    }

    /**
     * Утилита для локализации.
     *
     * @return L10n
     */
    public function getL10n()
    {
        
    }

    public function getLocalizer(): IdeLocalizer
    {
        
    }

    /**
     * Текущий язык.
     *
     * @return IdeLanguage
     */
    public function getLanguage()
    {
        
    }

    /**
     * Списки доступных языков IDE.
     *
     * @return IdeLanguage[]
     */
    public function getLanguages()
    {
        
    }

    /**
     * @param \Exception|\Error $e
     * @param string $context
     */
    public function sendError($e, $context = 'global')
    {
        // noup
    }

    public function makeEnvironment()
    {
        
    }

    public function getInnoSetupProgram()
    {
        
    }

    public function getLaunch4JPath()
    {
        
    }

    public function getLaunch4JProgram()
    {
        
    }

    public function getApacheAntProgram()
    {
        
    }

    public function getGradleProgram()
    {
        
    }

    /**
     * Вернуть путь к папке tools IDE.
     *
     * @return null|string
     */
    public function getToolPath()
    {
        
    }

    /**
     * Вернуть путь к apache ant тулу IDE.
     *
     * @return null|File
     */
    public function getApacheAntPath()
    {
        
    }

    /**
     * Вернуть путь к Gradle дистрибутиву.
     *
     * @deprecated не используется больше!
     * @return null|File
     */
    public function getGradlePath()
    {
        
    }

    /**
     * Вернуть путь к JRE среды (Java Runtime Environment).
     *
     * @return null|File
     */
    public function getJrePath()
    {
        
    }

    /**
     * Dev режим работы IDE?
     *
     * @return bool
     */
    public function isDevelopment()
    {
        
    }

    /**
     * Prod режим работы IDE?
     *
     * @return bool
     */
    public function isProduction()
    {
        
    }

    /**
     * Задать заголовок главной формы IDE.
     *
     * @param $value
     */
    public function setTitle($value)
    {
        
    }

    protected function readLanguages()
    {
        
    }

    /**
     * Вернуть именнованный конфиг из системной папки IDE.
     *
     * @param string $name
     * @return IdeConfiguration
     */
    public function getUserConfig($name)
    {
        
    }

    /**
     * Вернуть значение глобального конфига, из ide.conf.
     *
     * @param string $key
     * @param mixed $def
     *
     * @return string
     */
    public function getUserConfigValue($key, $def = null)
    {
        
    }

    /**
     * Вернуть значение глобального конфига в виде массива, из ide.conf.
     *
     * @param string $key
     * @param mixed $def
     *
     * @return array
     */
    public function getUserConfigArrayValue($key, $def = [])
    {
        
    }

    /**
     * Задать глобальную настройку для IDE, запишет в конфиг ide.conf.
     *
     * @param $key
     * @param $value
     */
    public function setUserConfigValue($key, $value)
    {
        
    }

    /**
     * Вернуть файл из папки, где находится сама IDE.
     *
     * @param string $path
     *
     * @return File
     */
    public static function getOwnFile($path)
    {
        
    }

    /**
     * Вернуть файл из системной папки IDE.
     *
     * @param string $path
     *
     * @return File
     */
    public function getFile($path)
    {
        
    }

    /**
     * Вернуть файлы из директории, отвечающие формату.
     *
     * @param AbstractFormat|string $format
     * @param string $directory
     * @return \string[]
     * @throws IllegalArgumentException
     */
    public function getFilesOfFormat($format, $directory)
    {
        
    }

    /**
     * Вернуть текущий лог файл IDE.
     *
     * @return File
     */
    public function getLogFile()
    {
        
    }

    /**
     * Очистить специализированную папку IDE от логов и кэша.
     */
    public function cleanup()
    {
        
    }

    /**
     * Создать временный файл с специализированной папке IDE.
     *
     * @param string $suffix
     * @return File
     */
    public function createTempFile($suffix = '')
    {
        
    }


    /**
     * @param string $suffix
     * @return File
     */
    public function createTempDirectory(string $suffix)
    {
        
    }

    /**
     * Вернуть список всех зарегистрированных шаблонов проекта.
     *
     * @return AbstractProjectTemplate[]
     */
    public function getProjectTemplates()
    {
        
    }

    /**
     * @return AbstractProjectSupport[]
     */
    public function getProjectSupports(): array
    {
        
    }

    /**
     * Зарегистрировать шаблон проекта.
     *
     * @param AbstractProjectTemplate $template
     */
    public function registerProjectTemplate(AbstractProjectTemplate $template)
    {
        
    }

    /**
     * Отменить регистрацию одной команды по ее имени класса.
     *
     * @param $commandClass
     * @param bool $ignoreAlways
     */
    public function unregisterCommand($commandClass, $ignoreAlways = true)
    {
        
    }

    /**
     * Отменить регистрацию всех команд.
     */
    public function unregisterCommands()
    {
        
    }

    /**
     * Выполнить зарегистрированную команду по названию ее класса.
     *
     * @param $commandClass
     */
    public function executeCommand($commandClass)
    {
        
    }

    /**
     * Вернуть команду по ее классу.
     *
     * @param string $commandClass class or uid
     * @return AbstractCommand|null
     */
    public function getRegisteredCommand($commandClass)
    {
        
    }

    /**
     * Зарегистрировать IDE команду.
     *
     * @param AbstractCommand $command
     * @param null $category
     */
    public function registerCommand(AbstractCommand $command, $category = null)
    {
        
    }

    /**
     * Вернуть изображение из ресурсов IDE /.data/img/
     *
     * @param string $path
     *
     * @param array $size
     * @param bool $cache
     * @return UXImageView
     */
    public static function getImage($path, array $size = null, $cache = true)
    {
        
    }

    /**
     * Вернуть зарегистрированный формат по его классу.
     * В приоритете форматы, зарегистирированные в проекте, а уже затем - глобальные форматы.
     *
     * @param $class
     * @return AbstractFormat
     */
    public function getRegisteredFormat($class)
    {
        
    }

    /**
     * Найти формат для редактирования файла/пути.
     *
     * @param $path
     *
     * @return AbstractFormat|null
     */
    public function getFormat($path)
    {
        
    }

    /**
     * Вернуть текущий открытый проект.
     *
     * @return Project
     */
    public function getOpenedProject()
    {
        
    }

    /**
     * Задать открытый проект.
     *
     * @param Project $openedProject
     */
    public function setOpenedProject($openedProject = null)
    {
        
    }

    /**
     * Создать редактор для редактирования файла, формат по-умолчанию определяется автоматически,
     * с помощью ранее зарегистрированных редакторов.
     *
     * @param $path
     *
     * @param array $options
     * @param string $format
     * @return AbstractEditor
     */
    public function createEditor($path, array $options = [], $format = null)
    {
        
    }

    public function getAccountManager()
    {
        
    }

    /**
     * @param string|AbstractProjectSupport $support
     * @throws IdeException
     */
    public function registerProjectSupport($support)
    {
        
    }

    /**
     * Зарегистрировать расширение IDE (по названию класса или его экземпляру).
     *
     * @param string|AbstractExtension $extension
     * @throws IdeException
     */
    public function registerExtension($extension)
    {
        
    }

    public function registerAll()
    {
        
    }

    /**
     * Добавить коллбэка, выполняющийся после старта и показа IDE.
     * Если IDE уже была показана, коллбэк будет выполнен немедленно.
     *
     * @param callable $handle
     */
    public function afterShow(callable $handle)
    {
        
    }

    /**
     * Находится ли IDE в спящем режиме (т.е. не используется).
     * @return boolean
     */
    public function isIdle()
    {
        
    }

    /**
     * Вернуть главную форму.
     * @return MainForm
     */
    public function getMainForm()
    {
        
    }


    /**
     * @return Ide
     * @throws \Exception
     */
    public static function get()
    {
        
    }

    /**
     * Вернуть открытый проект.
     * @return Project
     */
    public static function project()
    {
        
    }

    /**
     * Показать toast сообщение на главной форме IDE.
     *
     * @param $text
     * @param int $timeout
     */
    public static function toast($text, $timeout = 0)
    {
        
    }

    /**
     * Завершить работу IDE.
     */
    public function shutdown()
    {
        
    }

    /**
     * @param $resourceName
     * @return array
     */
    public function getInternalList($resourceName)
    {
        
    }

    /**
     * @param $argv
     * @return bool
     */
    protected function handleArgs($argv)
    {
        
    }

    /**
     * Отключить открытие последнего редактируемого проекта.
     * Можно применять при старте IDE, чтобы отменить загрузку предыдущего проекта.
     */
    public function disableOpenLastProject()
    {
        
    }

    /**
     * Сравнить версию с версией IDE.
     * @param $otherVersion
     * @return bool
     */
    public function isSameVersionIgnorePatch($otherVersion)
    {
        
    }

    /**
     * Restart IDE, запустить рестарт IDE, работает только в production режиме.
     */
    public function restart()
    {
        
    }

    /**
     * @param string $name
     * @param array $libPaths
     * @return null|File
     */
    public function findLibFile($name, array $libPaths = [])
    {
        
    }

    /**
     * @return ThemeManager
     */
    public function getThemeManager(): ThemeManager
    {
        
    }
}