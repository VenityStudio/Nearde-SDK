<?php
namespace ide\l10n;

use function alert;
use framework\core\Event;
use framework\localization\Localizer;
use ide\Ide;
use ide\Logger;
use php\gui\designer\UXDesignProperties;
use php\gui\framework\DataUtils;
use php\gui\UXChoiceBox;
use php\gui\UXComboBox;
use php\gui\UXComboBoxBase;
use php\gui\UXLabeled;
use php\gui\UXListView;
use php\gui\UXMenu;
use php\gui\UXMenuBar;
use php\gui\UXMenuItem;
use php\gui\UXNode;
use php\gui\UXParent;
use php\gui\UXTab;
use php\gui\UXTabPane;
use php\gui\UXTextInputControl;
use php\gui\UXTooltip;
use php\lib\str;
use php\util\Regex;
use function pre;


/**
 * Class IdeLocalizer
 * @package ide\l10n
 */
class IdeLocalizer extends Localizer
{
    private $useDefaultValuesForLang = null;

    /**
     * @return null
     */
    public function getUseDefaultValuesForLang()
    {
        
    }

    /**
     * @param null $useDefaultValuesForLang
     */
    public function setUseDefaultValuesForLang($useDefaultValuesForLang)
    {
        
    }

    /**
     * @param UXDesignProperties $properties
     * @return UXDesignProperties
     */
    public function translateDesignProperties(UXDesignProperties $properties)
    {
        
    }

    /**
     * @param UXTooltip $tooltip
     * @param array ...$args
     * @return UXTooltip
     * @internal param UXTooltip $node
     */
    public function translateTooltip(UXTooltip $tooltip, ...$args): UXTooltip
    {
        
    }

    /**
     * @param UXNode $node
     * @param array ...$args
     */
    public function translateNode(UXNode $node, ...$args)
    {
        
    }

    public function translateTab(UXTab $tab, ...$args)
    {
        
    }

    public function translateMenuItem(UXMenuItem $item, ...$args)
    {
        
    }

    public function translateMenu(UXMenu $menu, ...$args)
    {
        
    }

    public function translate($message, array $args = [])
    {
        
    }

    public function load(string $lang, string $file)
    {
        
    }
}