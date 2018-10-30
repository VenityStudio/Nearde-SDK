<?php
namespace ide\formats;

use ide\Ide;
use php\lib\reflect;

/**
 * Class IdeFormatOwner
 * @package ide\formats
 */
trait IdeFormatOwner
{
    /**
     * @var AbstractFormat[]
     */
    protected $formats = [];

    /**
     * @param AbstractFormat $format
     */
    public function registerFormat(AbstractFormat $format)
    {
        
    }

    /**
     * @param $class
     *
     * @return AbstractFormat
     */
    public function getRegisteredFormat($class)
    {
        
    }

    /**
     * @return AbstractFormat[]
     */
    public function getRegisteredFormats()
    {
        
    }
}