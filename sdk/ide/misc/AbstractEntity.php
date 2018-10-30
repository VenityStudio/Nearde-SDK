<?php
namespace ide\misc;
use php\format\JsonProcessor;
use php\io\File;
use php\io\FileStream;
use php\io\IOException;
use php\io\MemoryStream;
use php\io\Stream;
use php\lib\fs;
use php\lib\reflect;
use php\lib\str;
use php\util\Configuration;

/**
 * Абстрактная сущность/модель.
 *
 * Class AbstractEntity
 * @package ide\misc
 */
abstract class AbstractEntity
{
    /**
     * AbstractEntity constructor.
     * @param array $props
     */
    public function __construct(array $props = [])
    {
        
    }

    /**
     * Задает свойства из массива.
     * @param array $props
     */
    public function setProperties(array $props)
    {
        
    }

    /**
     * Возвращает свойства сущности в виде массива.
     * @return array
     */
    public function getProperties()
    {
        
    }

    /**
     * Алиас getProperties().
     * @return array
     */
    public function toArray()
    {
        
    }

    /**
     * @return string
     */
    public function __toString()
    {
        
    }

    /**
     * Save to json file.
     *
     * @param string|Stream $file
     * @throws IOException
     */
    public function saveToFile($file)
    {
        
    }

    /**
     * Load from json file.
     *
     * @param string|Stream $file
     */
    public function loadFromFile($file)
    {
        
    }
}