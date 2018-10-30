<?php
namespace ide\autocomplete;

/**
 * Class MethodAutoCompleteItem
 * @package ide\autocomplete
 */
class MethodAutoCompleteItem extends AutoCompleteItem
{
    /**
     * @var bool
     */
    protected $function = false;

    static function func($name, $description = '', $insert = null, $icon = null, $style = null)
    {
        
    }

    /**
     * @return boolean
     */
    public function isFunction()
    {
        
    }

    public function getDefaultIcon()
    {
        
    }
}