<?php
namespace ide\ui;

use ide\Ide;
use ide\project\Project;
use php\gui\layout\UXAnchorPane;
use php\gui\UXAlert;
use php\gui\UXTextArea;
use php\gui\UXTrayNotification;
use php\lib\fs;

class Notifications
{
    static function show($title, $message, $type = 'NOTICE')
    {
        
    }

    static function attachException(UXTrayNotification $notify, \Exception $e) {
        
    }

    static function error($title, $message)
    {
        
    }

    static function warning($title, $message)
    {
        
    }

    static function success($title, $message)
    {
        
    }

    static function showAccountWelcome()
    {
        
    }

    static function showAccountUnavailable()
    {
        
    }

    public static function showAccountAuthWelcome(array $data)
    {
        
    }

    public static function showException(\Exception $e)
    {
        
    }

    public static function showAccountAuthorizationExpired()
    {
        
    }

    public static function showExecuteUnableStop()
    {
        
    }

    public static function showInvalidValidation()
    {
        
    }

    public static function errorDeleteFile($file)
    {
        
    }

    public static function errorWriteFile($file, \Exception $e = null)
    {
        
    }

    public static function errorCopyFile($file)
    {
        
    }

    public static function warningFileOccurs($file)
    {
        
    }

    public static function showProjectIsDeleted()
    {
        
    }

    public static function showProjectIsDeletedFail()
    {
        
    }
}