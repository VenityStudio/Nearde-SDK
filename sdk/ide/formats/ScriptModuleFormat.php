<?php
namespace ide\formats;

use ide\editors\AbstractEditor;
use ide\editors\form\FormNamedBlock;
use ide\editors\ScriptModuleEditor;
use ide\formats\form\context\DeleteMenuCommand;
use ide\formats\form\context\ScriptHelperMenuCommand;
use ide\formats\form\context\SelectAllMenuCommand;
use ide\forms\InputMessageBoxForm;
use ide\Ide;
use ide\Logger;
use ide\project\behaviours\GuiFrameworkProjectBehaviour;
use ide\project\ProjectFile;
use ide\scripts\AbstractScriptComponent;
use ide\scripts\elements\DirectoryChooserScriptComponent;
use ide\scripts\elements\FileChooserScriptComponent;
use ide\scripts\elements\FileScriptComponent;
use ide\scripts\elements\IniStorageComponent;
use ide\scripts\elements\MacroScriptComponent;
use ide\scripts\elements\MediaPlayerScriptComponent;
use ide\scripts\elements\ModuleScriptComponent;
use ide\scripts\elements\PrinterScriptComponent;
use ide\scripts\elements\RobotScriptComponent;
use ide\scripts\elements\ScoreScriptComponent;
use ide\scripts\elements\TimerScriptComponent;
use ide\scripts\ScriptComponentContainer;
use ide\systems\FileSystem;
use ide\systems\RefactorSystem;
use ide\utils\FileUtils;
use php\io\File;
use php\lib\fs;
use php\lib\Str;
use php\util\Regex;
use php\util\Scanner;

/**
 * Class ScriptModuleFormat
 * @package ide\formats
 */
class ScriptModuleFormat extends AbstractFormFormat
{
    const REFACTOR_ELEMENT_ID_TYPE = 'SCRIPT_MODULE_FORMAT_ELEMENT_ID';

    /**
     * ScriptModuleFormat constructor.
     */
    public function __construct()
    {
        
    }

    /**
     * @param $file
     *
     * @param array $options
     * @return AbstractEditor
     */
    public function createEditor($file, array $options = [])
    {
        
    }

    public function getIcon()
    {
        
    }

    public function getTitle($path)
    {
        
    }

    /**
     * @param $file
     *
     * @return bool
     */
    public function isValid($file)
    {
        if (fs::ext($file) != 'php') {
            return false;
        }

        if (!fs::isFile(fs::pathNoExt($file) . '.module')) {
            return false;
        }

        return true;
    }

    /**
     * @param $any
     *
     * @return AbstractFormElement|null
     */
    public function getFormElement($any)
    {
        if ($element = $this->formElements[$any]) {
            return $element;
        }

        foreach ($this->formElements as $element) {
            if ($any && $any->userData instanceof ScriptComponentContainer) {
                $any = $any->userData->getType();
            }

            if ($element->isOrigin($any)) {
                return $element;
            }
        }

        return null;
    }

    public function delete($path, $silent = false)
    {
        parent::delete($path, $silent);

        $path = fs::pathNoExt($path);

        fs::delete("$path.module");
        fs::delete("$path.php.source");
        fs::delete("$path.php.sourcemap");
        fs::delete("$path.php.axml");
        fs::delete("$path.behaviour");
    }

    public function duplicate($path, $toPath)
    {
        parent::duplicate($path, $toPath);

        if ($project = Ide::project()) {
            $path = fs::pathNoExt($path);
            $toPath = fs::pathNoExt($toPath);

            foreach (['module', 'php', 'php.source', 'behaviour', 'php.axml'] as $ext) {
                $toFile = "$toPath.$ext";
                FileUtils::copyFile("$path.$ext", "$toPath.$ext");

                $name = fs::name($path);
                $toName = fs::name($toPath);

                if (fs::isFile($toFile)) {
                    if ($ext == 'php' || $ext == 'php.source') {
                        FileUtils::replaceInFile($toFile, "class $name extends", "class $toName extends");
                    }
                }
            }
        }
    }


    public function availableCreateDialog()
    {
        return true;
    }

    public function showCreateDialog($name = '')
    {
        $dialog = new InputMessageBoxForm('Создание нового модуля', 'Введите название для нового модуля', '* Только латинские буквы, цифры и _');
        $dialog->setResult($name);
        $dialog->setPattern(new Regex('^[a-z\\_]{1}[a-z0-9\\_]{0,60}$', 'i'), 'Данное название некорректное');

        $dialog->showDialog();
        return $dialog->getResult();
    }
}