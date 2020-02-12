<?php


namespace App\Service\User;


use App\Service\ServiceException;
use Throwable;

class UserExceptionDefined extends ServiceException
{
    const EMPTY_PHONE              = 102001;
    const USER_NAME_LENGTH_ILLEGAL = 102002;

    protected static $codeMessage
        = [
            self::EMPTY_PHONE              => '抱歉，区号不能为空',
            self::USER_NAME_LENGTH_ILLEGAL => '抱歉，用戶名长度不合法',
        ];

    public function __construct( $code = 0, $message = "", Throwable $previous = NULL )
    {
        parent::$codeMessage = parent::$codeMessage + self::$codeMessage;

        parent::__construct($code, $message, $previous);
    }
}
