<?php


namespace App\Service\User;


use App\Service\ServiceException;
use Throwable;

class UserExceptionDefined extends ServiceException
{
    const EMPTY_PHONE              = 102001;
    const USER_NAME_LENGTH_ILLEGAL = 102002;
    const USER_NAME_EXISTS         = 102003;
    const PHONE_NUMBER_EXISTS      = 102004;

    protected static $codeMessage
        = [
            self::EMPTY_PHONE              => '抱歉，区号不能为空',
            self::USER_NAME_LENGTH_ILLEGAL => '抱歉，用戶名长度不合法',
            self::USER_NAME_EXISTS         => '该用户名已经存在, 请更换其他用户名',
            self::PHONE_NUMBER_EXISTS      => '改手机号已经存在',
        ];

    public function __construct( $code = 0, $message = "", Throwable $previous = NULL )
    {
        parent::$codeMessage = parent::$codeMessage + self::$codeMessage;

        parent::__construct($code, $message, $previous);
    }
}
