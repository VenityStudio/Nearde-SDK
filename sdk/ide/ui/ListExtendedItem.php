<?php
namespace ide\ui;

use ide\Ide;
use ide\utils\UiUtils;
use php\gui\layout\UXHBox;
use php\gui\layout\UXVBox;
use php\gui\UXImage;
use php\gui\UXImageView;
use php\gui\UXLabel;

class ListExtendedItem extends UXHBox
{
    private $title = "";
    private $description = "";
    private $icon = null;

    /**
     * @var UXLabel
     */
    private $uiTitle;

    /**
     * @var UXLabel
     */
    private $uiDescription;

    /**
     * @var UXImageView
     */
    private $uiIcon;

    /**
     * @var bool
     */
    private $titleThin = false;


    /**
     * ListExtendedItem constructor.
     * @param string $title
     * @param string $description
     * @param null $icon
     */
    public function __construct(string $title = '', string $description = '', $icon = null)
    {
        
    }

    /**
     * @return bool
     */
    public function isTitleThin(): bool
    {
        
    }

    /**
     * @param bool $titleThin
     */
    public function setTitleThin(bool $titleThin)
    {
        
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        
    }

    /**
     * @return mixed
     */
    public function getIcon()
    {
        
    }

    /**
     * @param mixed $icon
     */
    public function setIcon($icon)
    {
        
    }
}