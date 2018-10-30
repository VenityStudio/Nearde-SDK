<?php
namespace ide\ui;

use ide\Ide;
use ide\utils\UiUtils;
use php\gui\layout\UXHBox;
use php\gui\layout\UXVBox;
use php\gui\UXLabel;
use php\gui\UXListCell;
use php\gui\UXListView;
use php\lib\arr;

class ListMenu extends UXListView
{
    protected $descriptionGetter = null;
    protected $nameGetter = null;
    protected $iconGetter = null;

    protected $nameThin = false;

    protected $thin = false;

    public function __construct()
    {
        
    }

    /**
     * @return boolean
     */
    public function isNameThin()
    {
        
    }

    /**
     * @param boolean $nameThin
     */
    public function setNameThin($nameThin)
    {
        
    }

    /**
     * @return bool
     */
    public function isThin()
    {
        
    }

    /**
     * @param bool $thin
     */
    public function setThin($thin)
    {
        
    }

    public function getDescriptionOfItem(MenuViewable $item)
    {
        
    }

    public function getIconOfItem(MenuViewable $item)
    {
        
    }

    public function getNameOfItem(MenuViewable $item)
    {
        
    }

    /**
     * @param callable $descriptionGetter
     */
    public function setDescriptionGetter(callable $descriptionGetter)
    {
        
    }

    /**
     * @param callable $nameGetter
     */
    public function setNameGetter(callable $nameGetter)
    {
        
    }

    /**
     * @param callable $iconGetter
     */
    public function setIconGetter(callable $iconGetter)
    {
        
    }

    protected function cellRender(UXListCell $view, MenuViewable $page)
    {
        
    }

    public function clear()
    {
        
    }

    public function add(MenuViewable $page)
    {
        
    }

    public function refresh()
    {
        
    }
}