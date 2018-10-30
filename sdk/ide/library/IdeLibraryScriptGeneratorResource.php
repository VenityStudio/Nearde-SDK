<?php
namespace ide\library;


use ide\utils\FileUtils;
use php\format\ProcessorException;
use php\io\IOException;
use php\lib\arr;
use php\lib\str;
use php\util\Flow;
use php\xml\DomDocument;
use php\xml\DomElement;
use php\xml\DomNode;
use php\xml\XmlProcessor;

class IdeLibraryScriptGeneratorResource extends IdeLibraryResource
{
    /**
     * @var DomDocument
     */
    protected $document;

    /**
     * IdeLibraryScriptGeneratorResource constructor.
     * @param string $path
     */
    public function __construct($path = null)
    {
        
    }

    public function getName()
    {
        
    }

    public function getDescription()
    {
        
    }

    public function getAuthor()
    {
        
    }

    public function getAuthorSite()
    {
        
    }

    public function getVersion()
    {
        
    }

    public function getSource($param = '')
    {
        
    }

    public function getSourceSyntax()
    {
        
    }

    public function getContexts()
    {
        
    }

    public function hasContext($context)
    {
        
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        
    }

    function getIcon()
    {
        
    }
}