<?php


namespace App\Service\User;


class UserException
{
    /**
     * 检查用户名是否存在
     *
     * Auth        : NiuJunQing
     * Create      : 1/16/2020 10:22 PM
     * Description :
     * @throws \Exception
     */
    public static function checkUserExist()
    {
        throw new \Exception('User Exist');
    }

    /**
     * 检查用户名太长
     *
     * Auth        : NiuJunQing
     * Create      : 1/16/2020 10:23 PM
     * Description :
     * @throws \Exception
     */
    public static function checkUserNameStringLength()
    {
        throw new \Exception('Name too long~');
    }

    /**
     * 检查用户性别
     *
     * Auth        : NiuJunQing
     * Create      : 1/16/2020 10:23 PM
     * Description :
     * @throws \Exception
     */
    public static function checkUserSex()
    {
        throw new \Exception('Name too long~');
    }
}
