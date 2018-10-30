<?php

namespace ide\editors\support;

use php\gui\layout\UXHBox;
use php\gui\UXImageArea;
use php\gui\UXImageView;
use php\gui\UXLabel;

class LineNumber
{
    /**
     * @var UXImageView[]
     */
    private $gutters;
    
    public function __invoke(int $line) {
        
    }

    /**
     * @param int $line
     * @param Gutter $gutter
     */
    public function addGutter(int $line, Gutter $gutter) {
        
    }

    /**
     * @param int $line
     */
    public function removeGutter(int $line) {
        
    }
}