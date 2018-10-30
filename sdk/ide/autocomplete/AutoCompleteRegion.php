<?php
namespace ide\autocomplete;

/**
 * Class AutoCompleteRegion
 * @package ide\autocomplete
 */
class AutoCompleteRegion
{
    protected $fromLine, $toLine = -1;
    protected $fromPos, $toPos = -1;

    /**
     * @var array
     */
    protected $values = [];

    /**
     * AutoCompleteRegion constructor.
     * @param $fromLine
     * @param $fromPos
     */
    public function __construct($fromLine, $fromPos)
    {
        
    }

    /**
     * @return mixed
     */
    public function getFromLine()
    {
        
    }

    /**
     * @param mixed $fromLine
     */
    public function setFromLine($fromLine)
    {
        
    }

    /**
     * @return int
     */
    public function getToLine()
    {
        
    }

    /**
     * @param int $toLine
     */
    public function setToLine($toLine)
    {
        
    }

    /**
     * @return mixed
     */
    public function getFromPos()
    {
        
    }

    /**
     * @param mixed $fromPos
     */
    public function setFromPos($fromPos)
    {
        
    }

    /**
     * @return int
     */
    public function getToPos()
    {
        
    }

    /**
     * @param int $toPos
     */
    public function setToPos($toPos)
    {
        
    }

    public function isAcross($line, $pos)
    {
        
    }

    public function setValue($value, $category, string $uid = null)
    {
        
    }


    public function setValueAsRef(&$value, $category, string $uid = null)
    {
        
    }

    public function getValues($category)
    {
        
    }

    public function &getLastValue($category)
    {
        
    }
}