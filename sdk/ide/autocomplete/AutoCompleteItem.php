<?php
namespace ide\autocomplete;
use php\gui\UXImage;
use php\gui\UXImageArea;

/**
 * Class AutoCompleteItem
 * @package ide\autocomplete
 */
abstract class AutoCompleteItem
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var string|UXImage|UXImageArea
     */
    protected $icon;

    /**
     * @var null
     */
    protected $insert = null;

    /**
     * @var string
     */
    private $style;

    /**
     * @var AutoCompleteItem[]
     */
    private $subItems = [];

    /**
     * @param $name
     * @param string $description
     * @param null $insert
     * @param null $icon
     * @param null $style
     */
    public function __construct($name, $description = '', $insert = null, $icon = null, $style = null)
    {
        
    }

    /**
     * @param AutoCompleteItem $item
     */
    public function addSubItem(AutoCompleteItem $item)
    {
        
    }

    /**
     * @return AutoCompleteItem[]
     */
    public function getSubItems(): array
    {
        
    }

    public function getInsert()
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
    public function getDescription()
    {
        
    }

    /**
     * @return \php\gui\UXImage|\php\gui\UXImageArea|string
     */
    public function getIcon()
    {
        
    }

    /**
     * @return string
     */
    public function getStyle()
    {
        
    }

    public function getDefaultIcon()
    {
        
    }

    /**
     * @return string
     */
    public function getContent()
    {
        
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        
    }

    /**
     * @param UXImage|UXImageArea|string $icon
     */
    public function setIcon($icon)
    {
        
    }

    /**
     * @param string $insert
     */
    public function setInsert(?string $insert)
    {
        
    }
}