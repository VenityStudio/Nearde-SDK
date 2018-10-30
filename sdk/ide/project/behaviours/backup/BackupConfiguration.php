<?php
namespace ide\project\behaviours\backup;

use ide\IdeConfiguration;
use ide\misc\AbstractEntity;

/**
 * Class BackupConfiguration
 * @package ide\project\behaviours\backup
 */
class BackupConfiguration extends AbstractEntity
{
    /**
     * @var IdeConfiguration
     */
    private $configuration;

    /**
     * Название dev-мастер копии.
     *
     * @var string
     */
    private $masterDefault = "dev";

    /**
     * Делать бэкапы каждый интервал времени.
     * @var bool
     */
    private $autoIntervalTrigger = true;

    /**
     * Интервал времени в миллис.
     * @var int
     */
    private $autoIntervalTriggerTime = 4 * 60 * 1000;

    /**
     * Максимум копий за сессию.
     * @var int
     */
    private $autoAmountMaxInSession = 8;

    /**
     * Максимум всего копий.
     * @var int
     */
    private $autoAmountMax = 12;

    /**
     * Делать бэкап после открытия проекта.
     * @var bool
     */
    private $autoOpenTrigger = false;

    /**
     * Делать бэкап перед закрытием проекта.
     * @var bool
     */
    private $autoCloseTrigger = true;

    /**
     * BackupConfiguration constructor.
     * @param string $configFile
     */
    public function __construct($configFile)
    {
        
    }

    public function save()
    {
        
    }

    public function load()
    {
        
    }

    /**
     * @return string
     */
    public function getMasterDefault()
    {
        
    }

    /**
     * @param string $masterDefault
     */
    public function setMasterDefault($masterDefault)
    {
        
    }

    /**
     * @return bool
     */
    public function isAutoIntervalTrigger()
    {
        
    }

    /**
     * @param bool $autoIntervalTrigger
     */
    public function setAutoIntervalTrigger($autoIntervalTrigger)
    {
        
    }

    /**
     * @return int
     */
    public function getAutoIntervalTriggerTime()
    {
        
    }

    /**
     * @param int $autoIntervalTriggerTime
     */
    public function setAutoIntervalTriggerTime($autoIntervalTriggerTime)
    {
        
    }

    /**
     * @return bool
     */
    public function isAutoOpenTrigger()
    {
        
    }

    /**
     * @param bool $autoOpenTrigger
     */
    public function setAutoOpenTrigger($autoOpenTrigger)
    {
        
    }

    /**
     * @return bool
     */
    public function isAutoCloseTrigger()
    {
        
    }

    /**
     * @param bool $autoCloseTrigger
     */
    public function setAutoCloseTrigger($autoCloseTrigger)
    {
        
    }

    /**
     * @return int
     */
    public function getAutoAmountMaxInSession()
    {
        
    }

    /**
     * @param int $autoAmountMaxInSession
     */
    public function setAutoAmountMaxInSession($autoAmountMaxInSession)
    {
        
    }

    /**
     * @return int
     */
    public function getAutoAmountMax()
    {
        
    }

    /**
     * @param int $autoAmountMax
     */
    public function setAutoAmountMax($autoAmountMax)
    {
        
    }
}