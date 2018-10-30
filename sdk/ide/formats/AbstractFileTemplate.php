<?php
namespace ide\formats;

use ide\Logger;
use php\io\Stream;
use php\lib\Str;

/**
 * Class AbstractFileTemplate
 * @package ide\formats
 */
abstract class AbstractFileTemplate
{
    /**
     * @var string
     */
    protected $template;

    /**
     * AbstractFileTemplate constructor.
     */
    public function __construct()
    {
        
    }

    /**
     * @return array
     */
    abstract public function getArguments();

    /**
     * @param string $oldContent
     * @param Stream $stream
     */
    public function apply($oldContent, Stream $stream)
    {
        
    }
}