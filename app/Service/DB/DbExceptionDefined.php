<?php


namespace App\Service\DB;


use App\Service\ServiceException;
use Throwable;

class DbExceptionDefined extends ServiceException
{
    const EMPTY_TABLE_NAME = 50001;

    public static $codeMessage
        = [
            self::EMPTY_TABLE_NAME => '数据表不能为空',
        ];

    public function __construct( $code = 0, $message = "", Throwable $previous = NULL )
    {
        parent::$codeMessage = parent::$codeMessage + self::$codeMessage;

        parent::__construct($code, $message, $previous);
    }


}
