<?php
namespace ide\project;
use ide\commands\tree\TreeCopyPathCommand;
use ide\commands\tree\TreeCreateDirectoryCommand;
use ide\commands\tree\TreeCreateFileCommand;
use ide\commands\tree\TreeDeleteFileCommand;
use ide\commands\tree\TreeEditFileCommand;
use ide\commands\tree\TreeEditInWindowFileCommand;
use ide\commands\tree\TreeScriptHelperMenuCommand;
use ide\commands\tree\TreeShowInExplorerCommand;
use ide\editors\menu\ContextMenu;
use ide\formats\form\context\ScriptHelperMenuCommand;
use ide\forms\MessageBoxForm;
use ide\Ide;
use ide\Logger;
use ide\systems\FileSystem;
use ide\systems\IdeSystem;
use ide\utils\FileUtils;
use php\gui\designer\UXDirectoryTreeValue;
use php\gui\designer\UXDirectoryTreeView;
use php\gui\designer\UXFileDirectoryTreeSource;
use php\gui\event\UXDragEvent;
use php\gui\event\UXMouseEvent;
use php\gui\UXDesktop;
use php\io\File;
use php\lang\Process;
use php\lib\fs;
use php\lib\str;


/**
 * Class ProjectTree
 * @package ide\project
 */
class ProjectTree
{
    /**
     * @var Project
     */
    protected $project;

    /**
     * @var UXDirectoryTreeView
     */
    protected $tree;

    /**
     * @var array
     */
    protected $ignoreExts = [];

    /**
     * @var array
     */
    protected $ignorePaths = ['.nearde' => 1];

    /**
     * @var callable[]
     */
    protected $ignoreFilters = [];

    /**
     * @var callable[]
     */
    protected $openHandlers = [];

    /**
     * @var callable[]
     */
    protected $valueCreators = [];

    /**
     * @var ContextMenu
     */
    protected $contextMenu;

    /**
     * ProjectTree constructor.
     * @param Project $project
     */
    public function __construct(Project $project)
    {
        
    }

    /**
     * @return ContextMenu
     */
    public function getContextMenu()
    {
        
    }

    /**
     * @return string
     */
    public function getSelectedPath()
    {
        
    }

    /**
     * @return bool
     */
    public function hasSelectedPath()
    {
        
    }

    /**
     * @return ProjectFile|null|File
     */
    public function getSelectedFullPath()
    {
        
    }

    public function expandSelected()
    {
        
    }

    /**
     * @param UXDirectoryTreeView $treeView
     */
    public function setView(UXDirectoryTreeView $treeView)
    {
        
    }

    public function getExpandedPaths()
    {
        
    }

    /**
     * @param array $exts
     */
    public function addIgnoreExtensions(array $exts)
    {
        
    }

    /**
     * @param array $exts
     */
    public function removeIgnoreExtensions(array $exts)
    {
        
    }

    public function addIgnorePaths(array $paths)
    {
        
    }

    public function removeIgnorePaths(array $paths)
    {
        
    }

    public function addIgnoreFilter(callable $callback)
    {
        
    }

    public function addValueCreator(callable $callback)
    {
        
    }

    public function addOpenHandler(callable $callback)
    {
        
    }

    /**
     * @return UXFileDirectoryTreeSource
     */
    public function createSource()
    {
        
    }

    public function setExpandedPaths(array $paths)
    {
        
    }
}