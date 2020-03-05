<?php


namespace App\Lib\Logging;


interface LogInterface
{
    /**
     * @param       $msg
     * @param array $context
     *
     * @return mixed
     */
    public static function info($msg, $context = []);

    /**
     * @param       $msg
     * @param array $context
     *
     * @return mixed
     */
    public static function error($msg, $context = []);

    /**
     * @param       $msg
     * @param array $context
     *
     * @return mixed
     */
    public static function warn($msg, $context = []);

    /**
     * @param       $msg
     * @param array $context
     *
     * @return mixed
     */
    public static function debug($msg, $context = []);
}
