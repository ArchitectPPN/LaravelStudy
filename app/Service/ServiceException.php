<?php


namespace App\Service;

use Exception;
use Throwable;

class ServiceException extends Exception
{
    protected static $codeMessage = [];

    /**
     * ServiceException constructor.
     *
     * @param int            $code
     * @param string         $message
     * @param Throwable|NULL $previous
     */
    public function __construct( $code = 0, $message = "", Throwable $previous = NULL )
    {
        $message = isset(self::$codeMessage[$code]) ? self::$codeMessage[$code] : $message;

        parent::__construct($message, $code, $previous);
    }
}
