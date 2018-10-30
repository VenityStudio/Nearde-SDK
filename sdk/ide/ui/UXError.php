<?php

namespace ide\ui;

use php\gui\layout\UXAnchorPane;
use php\gui\UXAlert;
use php\gui\UXTextArea;

class UXError extends UXAlert
{
    /**
     * UXError constructor.
     * @param \Throwable $throwable
     * @throws \Exception
     */
    public function __construct(\Throwable $throwable)
    {
        
    }

    /**
     * @throws \Exception
     */
    public function show()
    {
        
    }

    /**
     * @return mixed|void
     * @throws \Exception
     */
    public function showAndWait()
    {
        
    }
}