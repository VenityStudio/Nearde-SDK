<?php
namespace ide;

use ide\systems\IdeSystem;
use php\io\Stream;
use php\lang\Environment;
use php\lang\IllegalArgumentException;
use php\lang\Thread;
use php\lang\ThreadPool;
use php\lib\char;
use php\lib\fs;
use php\lib\Str;
use php\time\Time;
use php\util\Shared;

/**
 * Class Logger
 * @package ide
 */
class Logger
{
    protected static $ANSI_CODES = array(
        "off"        => 0,
        "bold"       => 1,
        "italic"     => 3,
        "underline"  => 4,
        "blink"      => 5,
        "inverse"    => 7,
        "hidden"     => 8,
        "gray"       => 30,
        "red"        => 31,
        "green"      => 32,
        "yellow"     => 33,
        "blue"       => 34,
        "magenta"    => 35,
        "cyan"       => 36,
        "silver"     => "0;37",
        "white"      => 37,
        "black_bg"   => 40,
        "red_bg"     => 41,
        "green_bg"   => 42,
        "yellow_bg"  => 43,
        "blue_bg"    => 44,
        "magenta_bg" => 45,
        "cyan_bg"    => 46,
        "white_bg"   => 47,
    );

    const LEVEL_ERROR = 1;
    const LEVEL_WARN = 2;

    const LEVEL_INFO = 100;
    const LEVEL_DEBUG = 200;

    /**
     * @var ThreadPool
     */
    protected static $threadPool = null;
    protected static $level = self::LEVEL_DEBUG;

    protected static function withColor($str, $color)
    {
        
    }

    /**
     * @return int
     */
    public static function getLevel()
    {
        
    }

    /**
     * @param int $level
     */
    public static function setLevel($level)
    {
        
    }

    static protected function getLogName($level)
    {
        
    }

    static protected function getLogColor($level) {
        
    }

    static protected function log($level, $message, ...$args)
    {
        
    }

    static function info($message)
    {
        
    }

    static function debug($message)
    {
        
    }

    static function warn($message)
    {
        
    }

    static function error($message)
    {
        
    }

    public static function trace($message = null)
    {
        
    }

    static function exception($message, $e)
    {
        
    }

    public static function reset()
    {
        
    }

    public static function shutdown()
    {
        
    }
}