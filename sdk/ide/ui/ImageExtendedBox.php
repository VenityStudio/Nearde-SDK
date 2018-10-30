<?php
namespace ide\ui;

use ide\utils\UiUtils;
use php\gui\layout\UXHBox;
use php\gui\layout\UXVBox;
use php\gui\UXImageArea;
use php\gui\UXLabel;
use php\gui\UXLabelEx;
use php\gui\UXImage;
use behaviour\StreamLoadableBehaviour;
use php\io\Stream;

/**
 * Class ImageBox
 * @package ide\ui
 */
class ImageExtendedBox extends UXHBox implements StreamLoadableBehaviour
{
    /**
     * @var UXImageArea
     */
    protected $imageArea;

    /**
     * @var UXLabel
     */
    protected $titleLabel;

    /**
     * @var UXLabel
     */
    protected $descriptionLabel;

    /**
     * ImageBox constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct($width, $height)
    {
        
    }

    public function setImage(UXImage $image = null)
    {
        
    }

    public function getImage()
    {
        
    }

    public function setTitle($title, $style = '')
    {
        
    }

    public function setDescription($description, $style = '')
    {
        
    }

    public function getTitle()
    {
        
    }

    public function getDescription()
    {
        
    }

    /**
     * @param $path
     * @return mixed
     */
    function loadContentForObject($path)
    {
        
    }

    /**
     * @param $content
     * @return mixed
     */
    function applyContentToObject($content)
    {
        
    }

    /**
     * @param string $tooltip
     */
    public function setTooltip($tooltip)
    {
        
    }
}