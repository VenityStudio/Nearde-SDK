<?php

namespace ide\misc;

use ide\Logger;
use ide\utils\Json;
use php\format\ProcessorException;
use php\io\FileStream;
use php\io\IOException;
use php\io\Stream;
use php\lib\fs;

/**
 * Class MetaTemplate
 * @package ide\misc
 */
abstract class AbstractMetaTemplate extends AbstractEntity
{
    /**
     * @var string
     */
    protected $file;

    /**
     * @var string
     */
    protected $metaFile;

    /**
     * MetaTemplate constructor.
     * @param string $file
     */
    public function __construct(string $file = null)
    {
        
    }

    /**
     * @param string $file
     */
    public function useFile(string $file)
    {
        
    }

    abstract public function render(Stream $out);

    /**
     * Load.
     */
    public function load()
    {
        
    }

    /**
     * Save.
     */
    public function save()
    {
        
    }
}