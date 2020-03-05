<?php


namespace App\Lib\Logging;


use App\Lib\Traits\ClassConstantTrait;
use Illuminate\Log\LogManager;
use Monolog\Logger;

class LogFactory
{
    use ClassConstantTrait;

    const DEFAULT_LOG = 'web';

    protected static $loggerArr;

    /**
     * @param string $channel
     *
     * @return mixed
     */
    public static function getLogging(string $channel)
    {
        if(!isset(self::$loggerArr[$channel])){
            if(!in_array($channel, self::getClassConstants())){
                $channel = self::DEFAULT_LOG;
                self::$loggerArr[$channel] = app()['log'];
            } else {
                $oLogManager = new LogManager(app());
                $oLogManager->setDefaultDriver($channel);
                self::$loggerArr[$channel] = new Logger($oLogManager);
            }
        }

        return self::$loggerArr[$channel];
    }

}
