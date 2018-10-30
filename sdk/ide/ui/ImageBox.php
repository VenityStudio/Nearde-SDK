<?php
namespace ide\ui;
use ide\utils\UiUtils;
use php\gui\UXImageArea;
use php\gui\layout\UXVBox;
use php\gui\UXLabelEx;
use php\gui\UXImage;
use behaviour\StreamLoadableBehaviour;
use php\io\Stream;

/**
 * Class ImageBox
 * @package ide\ui
 */
class ImageBox extends UXVBox implements StreamLoadableBehaviour
{
    /**
     * @var UXImageArea
     */
    protected $imageArea;

    /**
     * @var UXLabelEx
     */
    protected $titleLabel;

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

    public function getTitle()
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