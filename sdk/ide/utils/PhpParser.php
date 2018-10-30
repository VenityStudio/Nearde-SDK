<?php
namespace ide\utils;

use ide\Logger;
use php\lang\SourceMap;
use php\lib\arr;
use php\lib\Char;
use php\lib\fs;
use php\lib\Str;
use php\util\Flow;
use php\util\Regex;
use php\util\SharedValue;
use phpx\parser\SourceToken;
use phpx\parser\SourceTokenizer;
use php\io\MemoryStream;
use php\io\Stream;
use php\util\Scanner;

/**
 * Class PhpParser
 * @package ide\utils
 */
class PhpParser
{
    /**
     * @var string
     */
    protected $content = '';

    /**
     * @var int
     */
    protected $contentLineCount = 0;

    /**
     * @var array
     */
    protected $sourceMapInserts = [];

    /**
     * @var SourceMap
     */
    protected $sourceMap;

    /**
     * @var string
     */
    protected $sourceMapFile;

    public function __construct($content, $sourceMapFile = null)
    {
        
    }

    /**
     * @param $file
     * @param bool $withSourceMap
     * @return PhpParser
     */
    static function ofFile($file, $withSourceMap = false)
    {
       
    }

    /**
     * @return string
     */
    public function getContent()
    {
        
    }

    /**
     * @param string $sourceMapFile json source map
     */
    public function applySourceMapFile($sourceMapFile)
    {
        
    }

    /**
     * @return SourceMap
     */
    public function getSourceMap()
    {
        
    }

    /**
     * @param string $toFile
     * @param bool $saveSourceMap
     */
    public function saveContent($toFile, $saveSourceMap = false)
    {
        
    }

    /**
     * @param $file
     */
    public function saveSourceMap($file = null)
    {
        
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        
    }

    /**
     * @param $from
     * @param $to
     * @param callable $lineBuilder ($line) : newLine
     */
    public function processLines($from, $to, callable $lineBuilder)
    {
        
    }

    /**
     * @param int $from
     * @param int $to
     */
    public function removeLines($from, $to)
    {
        
    }

    public function getCodeOfMethod($class, $method)
    {
        
    }

    /**
     * @param string $class
     * @param string $method
     * @param string $code
     * @return bool
     */
    public function insertToMethod($class, $method, $code)
    {
        
    }

    /**
     * @param int $lineNumber
     * @param $text
     */
    public function insertAfterLine($lineNumber, $text)
    {
        
    }

    /**
     * @param $class
     * @param SourceTokenizer|null $tokenizer
     * @return array|null
     */
    public function findClass($class, SourceTokenizer $tokenizer = null)
    {
        
    }

    /**
     * @param string $class
     * @param string $property
     * @param SourceTokenizer|null $tokenizer
     * @return bool
     */
    public function removeVirtualProperty(string $class, string $property, SourceTokenizer $tokenizer = null)
    {
        
    }

    /**
     * @param string $class
     * @param string $type
     * @param string $property
     * @param string $description
     * @param SourceTokenizer|null $tokenizer
     * @return bool
     */
    public function setVirtualProperty(string $class, string $type, string $property, string $description = '', SourceTokenizer $tokenizer = null): bool
    {
        
    }

    /**
     * @param $class string if not set means any class
     * @param $methodName
     * @param SourceTokenizer|null $tokenizer
     * @return array|null
     */
    public function findMethod($class, $methodName, SourceTokenizer $tokenizer = null)
    {
        
    }

    /**
     * @param SourceTokenizer|null $tokenizer
     *
     * @return array
     */
    public function findUseImports(SourceTokenizer $tokenizer = null)
    {
        
    }

    public function findAllUseImport(SourceTokenizer $tokenizer = null)
    {
        
    }

    public function findUseImport($class, $alias = null)
    {
        
    }

    public function addUseImports(array $imports)
    {
        
    }

    public function getTokenizer(SourceTokenizer $tokenizer = null)
    {
        
    }

    /**
     * @param string $className
     * @param string $methodName
     * @param string $code
     * @return bool
     */
    public function appendToMethod($className, $methodName, $code)
    {
        
    }

    public function replaceOfMethod($class, $method, $code, $smart = true)
    {
        
    }
}